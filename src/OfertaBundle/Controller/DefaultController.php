<?php

namespace OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OfertaBundle\Entity\Oferta;
use AreaBundle\Entity\Area;
use VisitasDiaBundle\Entity\VisitasDia;
use VisitasMesBundle\Entity\VisitasMes;
use VisitasAnioBundle\Entity\VisitasAnio;
use VisitasOfertaBundle\Entity\VisitasOferta;
use PalabrasClaveOfertaBundle\Entity\PalabrasClaveOferta;
use RegistroOfertasDemandasBundle\Entity\RegistroOfertasDemandas;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Tools\Pagination\Paginator;
use ComentarioBundle\Entity\Comentario;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\JsonResponse;
use PUGX\AutocompleterBundle\Form\Type\AutocompleteType;
use ComentarioBundle\Form\Type\ComentarioType;
use Ob\HighchartsBundle\Highcharts\Highchart;
use RegistroVisitasOfertaBundle\Entity\RegistroVisitasOferta;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/*
  =====================================================================================

  Controlador de la clase Oferta, para poder realizar las operaciones correspondientes en la
  aplicación.

  =====================================================================================
*/

class DefaultController extends Controller

{

  /*
    =====================================================================================

    Método menu "menu":

    Obtendra todas las areas y tipos de la base de datos para construir el menu que filtrara
    nuestras busquedas en el apartado ¿ Donde buscar ?

    Pasos del método:
      i) Obtiene las areas de la base de datos.
      ii) Obtiene los tipos de la base de datos.
      iii) Devuelve la plantilla que se encargara de construir el menu a partir de las areas y tipos.
           Localizacion: src/OfertaBundle/Resources/views/Default/menu.html.twig

    =====================================================================================
  */

  public function menuAction(){
    $areas = $this->getDoctrine()
    ->getRepository('AreaBundle:Area')
    ->findAll();
    $tipos = $this->getDoctrine()
    ->getRepository('TipoBundle:Tipo')
    ->findAll();

    return $this->render('OfertaBundle:Default:menu.html.twig', array(
      'areas' => $areas, 'tipos' => $tipos
          //'disciplinas' => $disciplinaIds
      ));
  }

  /*
    =====================================================================================

    Método eliminarOferta "eliminarOferta":

    A partir de la id de la oferta dada por el método "get" de Request, buscará la oferta en la
    base de datos y la eliminará.

    Pasos del método:
      i) Coge la id de la oferta pasada por get(Request).
      ii) Busca la oferta en la base de datos a partir de la ID.
      iii) Comprueba si la oferta ha sido resuelta a partir del get resolve(Request) para registrarlo en las ofertas resueltas/noResueltas
           en la base de datos
      iii) Elimina la oferta de la base de datos.
      iv) Elimina la imagen asociada a la oferta en la base de datos
      v) Devuelve la plantilla que imprimirara todas las ofertas en el sistema.
           Localizacion: src/OfertaBundle/Resources/views/Default/mostrarOfertas.html.twig

    =====================================================================================
  */


  public function eliminarOfertaAction(Request $request){
    $id=$request->query->get('idOferta');
    $resolve=$request->query->get('resolve');
    $em = $this->getDoctrine()->getManager();


    $registroOfertaDemanda=$this->getDoctrine()->getRepository('RegistroOfertasDemandasBundle:RegistroOfertasDemandas')->findAll();

    if($resolve=="no"){
      $registroOfertaDemanda[0]->setOfertasNoResueltas($registroOfertaDemanda[0]->getOfertasNoResueltas()+1);
    }
    else{
      $registroOfertaDemanda[0]->setOfertasResueltas($registroOfertaDemanda[0]->getOfertasResueltas()+1);
    }

    $oferta = $this->getDoctrine()->getRepository('OfertaBundle:Oferta')->find($id);

    if (!$oferta) {
      throw $this->createNotFoundException(
        'No oferta found for id '.$id
        );
    }

    $registroVisitasOferta=$em->getRepository('RegistroVisitasOfertaBundle:RegistroVisitasOferta')->findBy( array('oferta' => $oferta->getId()));

    if(count($registroVisitasOferta)>0){
      $em->remove($registroVisitasOferta[0]);
    }

    unlink($this->getParameter('brochures_directory')."ofertas/".$oferta->getBrochure());

    $em->remove($oferta);
    $em->flush();


    return $this->redirectToRoute('mostrarOfertas');
  }

  /*
    =====================================================================================

    Método mostrarOferta "mostrarOferta":

    A partir de la id de la oferta dada por el método "get" de Request, buscará la oferta en la
    base de datos y la imprimirá.

    Pasos del método:
      i) Coge la id de la oferta pasada por get(Request).
      ii) Busca la oferta en la base de datos a partir de la ID.
      iii) Busca el registro de visitas de la Oferta a partir de la Id de la oferta dada por get(Request)
      iii) Gestiona las visitas de la oferta --> metodo "gestionarVisitasOferta"
      iv) Obtiene la gráfica de las visitas de la Oferta por anio, o bien el último o el dado por get(Request)
      v) Construye el formulario para aniadir un nuevo comentario o para comunicarnos con el propietario de la oferta.
      vi) Comprueba si el formulario del comentario es valido para añadirlo o si el formulario para comunicarnos es correcto.
      vii) Redirige hacia el perfil de la oferta
           Localizacion: src/OfertaBundle/Resources/views/Default/oferta.html.twig

    =====================================================================================
  */

  public function mostrarOfertaAction(Request $request){
    $idOferta=$request->query->get('idOferta');
    $em = $this->getDoctrine()->getManager();
    $session = $request->getSession();
    $oferta = $this->getDoctrine()->getRepository('OfertaBundle:Oferta')->find($idOferta);
    $anio=0;
    $anioId=0;


    $this->gestionarVisitasOferta($session,$oferta, $em,$request);
    $registroVisitasOferta=$em->getRepository('RegistroVisitasOfertaBundle:RegistroVisitasOferta')->findBy( array('oferta' => $oferta->getId()))[0];

    if($request->query->get('idAnio')!=null){
      $anioId=$request->query->get('idAnio');
      $anio=$em->getRepository('VisitasAnioBundle:VisitasAnio')->findBy( array('id' =>  $anioId ))[0];
    }
    else{
      $anioId=count($registroVisitasOferta->getVisitasAnio())-1;
      $anio=$registroVisitasOferta->getVisitasAnio()[$anioId];
    }

    $anios = $registroVisitasOferta->getVisitasAnio();


    $ob = $this->getGraficaPorAnio($anio);


    $formComentario = $this->createForm(new ComentarioType(),$comentario=new Comentario());
    $formContactAutor = $this->createFormBuilder(null)
                  ->add('mensaje', 'textarea', array('label' => 'Mensaje'))
                  ->add('Enviar','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
                  ->setAction($this->generateUrl('mostrarOferta'))
                  ->getForm();

    $formContactAutor->handleRequest($request);

    if($formContactAutor->isValid()){
      $message = \Swift_Message::newInstance()
      ->setSubject('Mensaje para el propietario de la oferta: '. $oferta->getNombre())
      ->setFrom($this->getUser()->getEmail())
      ->setTo($oferta->getAutor())
      ->setBody(
        $formContactAutor->get('mensaje')->getData()
      )
    ;

    $this->get('mailer')->send($message);
    return $this->redirect($request->getUri());
    }


    $formComentario->handleRequest($request);

    if($formComentario->isValid()){
      $comentario->setAutor($this->container->get('security.context')->getToken()->getUser()->getEmail());
      $comentario->setFecha(new \DateTime('today'));
      $oferta->addComentario($comentario);

      $em->persist($comentario);
      $em->persist($oferta);
      $em->flush();
      return $this->redirect($request->getUri());
    }

    return $this->render('OfertaBundle:Default:oferta.html.twig', array('oferta' => $oferta,'formComment' => $formComentario->createView(),
                                                                        'formContactAutor' => $formContactAutor->createView(),"ob" => $ob, "anios" => $anios ));
  }

  /*
    =====================================================================================

    Método gestionarVisitasOferta "gestionarVisitasOferta":

    Comprueba si el usuario ha visitado por primera vez la oferta en la nueva sesion para sumarle la visita correspondiente.

    Pasos del método:
      i) Comprueba si el usuario a visitado ya ofertas.
        i.i) En caso afirmativo Comprueba si la oferta ha sido visitada antes.
            i.i.i) Si no es así, la guardará en la sesión y le sumará la visita correspondiente.

      ii) En caso negativo, crea la nueva sesión con la oferta y le suma la visita correspondiente.

    =====================================================================================
  */

public function gestionarVisitasOferta($session,$oferta, $em,$request){

    if($session->get('visitasOfertas')!=null){
      if(!array_search($oferta->getId(), $session->get('visitasOfertas'))){
        $tokens = $session->get('visitasOfertas');
        $tokens[] = $oferta->getId();
        $session->set('visitasOfertas', $tokens);
        //for($i=0; $i<800; $i=$i+1){
          $this->sumarVisitasOferta($oferta,$em,$request,0);
        //}
        $em->persist($oferta);
        $em->flush();
      }
    }
    else{
      $array[]=-1;
      $array[]=$oferta->getId();
      //for($i=0; $i<800; $i=$i+1){
        $this->sumarVisitasOferta($oferta,$em,$request,0);
      //}
      $session->set('visitasOfertas',$array);
    }

}

/*
  =====================================================================================

  Método sumar visitas a oferta "sumarVisitasOferta":

  Buscará la fecha de la visita en la base de datos, en caso de encontrarla la sumará, en caso contrario creará una nueva.

  Pasos del método:
    i) Comprueba si la oferta tiene creada ya un registro de visitas.
      i.i) En caso negativo, creará un nuevo registro con la fecha y visita correspondiente.

    ii) En caso afirmativo:
      ii.i) Comprueba si existe la fecha con el anio en el registro de visitas.
        ii.i.i) Si existe el anio, comprueba si existe el mes.
          ii.i.i.i) Si existe el mes, comprueba el dia.
            ii.i.i.i.i) Si existe el día, sumará la visita a la fecha.
            ii.i.i.i.ii) Si no existe el dia, creará la nueva fecha con el día sumandole la visita correspondiente.
          ii.i.i.ii) Si no existe el mes, creará el mes y el dia correspondiente, y sumará la visita a la fecha.
        ii.i.ii) Si no existe el anio, creará la nueva fecha con el anio, mes y dia correspondiente y le sumará la visita a la oferta.

  =====================================================================================
*/

public function sumarVisitasOferta($oferta,$em,$request,$i){
  $date = new \DateTime('today+800day');
  $anio=$date->format('Y');
  $ofertaId=$request->request->get('idOferta');
  $oferta = $this->getDoctrine()->getRepository('OfertaBundle:Oferta')->find($oferta->getId());

  $registroVisitasOferta=$em->getRepository('RegistroVisitasOfertaBundle:RegistroVisitasOferta')->findBy( array('oferta' => $oferta->getId()));
    if($registroVisitasOferta==null){
      $registroVisitasOferta = new RegistroVisitasOferta();
      $registroVisitasOferta->setOferta($oferta);

      $visitasDia = new VisitasDia();
      $visitasDia->setDia($date->format('d'));
      $visitasDia->setVisitas(1);
      $visitasMes = new VisitasMes();
      $visitasMes->setMes($date->format('m'));
      $visitasMes->setVisitas(1);
      $visitasMes->addVisitasDium($visitasDia);
      $visitasAnio = new VisitasAnio();
      $visitasAnio->setAnio($date->format('Y'));
      $visitasAnio->setVisitas(1);
      $visitasAnio->addVisitasMe($visitasMes);

      $visitasDia->setVisitasMes($visitasMes);
      $visitasMes->setVisitasAnio($visitasAnio);
      $registroVisitasOferta->addVisitasDium($visitasDia);
      $registroVisitasOferta->addVisitasMe($visitasMes);
      $registroVisitasOferta->addVisitasAnio($visitasAnio);

      $em->persist($visitasDia);
      $em->persist($visitasMes);
      $em->persist($visitasAnio);
      $em->persist($registroVisitasOferta);
      $em->flush();
    }
    else {

      $visitasAnio=null;

      for($i=0; $i<count($registroVisitasOferta[0]->getVisitasAnio()); $i=$i+1){
        if($registroVisitasOferta[0]->getVisitasAnio()[$i]->getAnio()==$date->format('Y')){
          $visitasAnio = $registroVisitasOferta[0]->getVisitasAnio()[$i];
        }
      }
      if($visitasAnio!=null){
        $visitasMes=$em->getRepository('VisitasMesBundle:VisitasMes')->findBy( array('visitasAnio' => $visitasAnio->getId(),'mes' => $date->format('m') ));
        if($visitasMes!=null){
          $visitasDia=$em->getRepository('VisitasDiaBundle:VisitasDia')->findBy( array('visitasMes' => $visitasMes[0]->getId(),'dia' => $date->format('d') ));
          if($visitasDia!=null){
            $visitasDia[0]->setVisitas($visitasDia[0]->getVisitas()+1);
            $visitasMes[0]->setVisitas($visitasMes[0]->getVisitas()+1);
            $visitasAnio->setVisitas($visitasAnio->getVisitas()+1);
          }
          else{
            $visitasDia = new VisitasDia();
            $visitasDia->setDia($date->format('d'));
            $visitasDia->setVisitas(1);
            $em->persist($visitasDia);
            $em->flush();
            $visitasDia->setVisitasMes($visitasMes[0]);
            $visitasMes[0]->addVisitasDium($visitasDia);
            $visitasMes[0]->setVisitas($visitasMes[0]->getVisitas()+1);
            $visitasAnio->setVisitas($visitasAnio->getVisitas()+1);   ;
            $registroVisitasOferta[0]->addVisitasDium($visitasDia);
          }
        }
        else{
          $visitasDia = new VisitasDia();
          $visitasDia->setDia($date->format('d'));
          $visitasDia->setVisitas(1);
          $visitasMes = new VisitasMes();
          $visitasMes->setMes($date->format('m'));
          $visitasMes->setVisitas(1);
          $visitasMes->setVisitasAnio($visitasAnio);
          $visitasDia->setVisitasMes($visitasMes);
          $visitasMes->addVisitasDium($visitasDia);
          $visitasAnio->setVisitas($visitasAnio->getVisitas()+1);
          $visitasAnio->addVisitasMe($visitasMes);
          $registroVisitasOferta[0]->addVisitasDium($visitasDia);
          $registroVisitasOferta[0]->addVisitasMe($visitasMes);
          $em->persist($visitasDia);
          $em->persist($visitasMes);
          $em->flush();
        }
      }
      else{
        $visitasDia = new VisitasDia();
        $visitasDia->setDia($date->format('d'));
        $visitasDia->setVisitas(1);
        $visitasMes = new VisitasMes();
        $visitasMes->setMes($date->format('m'));
        $visitasMes->setVisitas(1);
        $visitasMes->addVisitasDium($visitasDia);
        $visitasAnio = new VisitasAnio();
        $visitasAnio->setAnio($date->format('Y'));
        $visitasAnio->setVisitas(1);
        $visitasAnio->addVisitasMe($visitasMes);

        $visitasDia->setVisitasMes($visitasMes);
        $visitasMes->setVisitasAnio($visitasAnio);
        $registroVisitasOferta[0]->addVisitasDium($visitasDia);
        $registroVisitasOferta[0]->addVisitasMe($visitasMes);
        $registroVisitasOferta[0]->addVisitasAnio($visitasAnio);

        $em->persist($visitasDia);
        $em->persist($visitasMes);
        $em->persist($visitasAnio);
        $em->persist($registroVisitasOferta[0]);
        $em->flush();
      }
    }
    $em->flush();
  }

  /*
    =====================================================================================

    Método mostrar todas Ofertas "mostrarOfertas":

    Mostrara todas las ofertas del sistema, filtrandola en funcion de las areas en el caso de que se especifique. --> metodo "getQueryOfertas"

    Pasos del método:
      i) Obtendrá el usuario del sistema y las ofertas en función a los filtros que se establezcan.
      ii) Construira el formulario con las palabras clave, para avisar al usuario en el caso que se aniada una nueva oferta con dichas palabras.
      iii) Comprueba si el formulario es valido, para aniadir las palabras clave a la base de datos.
      iv) Devuelve la plantilla que se encargará de imprimir las ofertas.

    Localizacion: src/OfertaBundle/Resources/views/Default/mostrarOfertas.html.twig

    =====================================================================================
  */

  public function mostrarOfertasAction($page=0,$cursorScroll=0,Request $request){
    $session = $request->getSession();
    $em = $this->getDoctrine()->getManager();
    $user=$this->container->get('security.context')->getToken()->getUser();

    if($request->query->get('limpiarCriteriosBusquedas')!=null){
      if($request->query->get('limpiarCriteriosBusquedas')=="si"){
        $session->remove('area_id');
        $session->remove('rama_id');
        $session->remove('disciplina_id');
        $session->remove('tipo_id');
      }
    }

    $ofertas = $this->getQueryOfertas($request->query->get('area_id'),$request->query->get('rama_id'),$request->query->get('disciplina_id'), $request->query->get('tipo') ,$request);



    $formPalabrasClaveOferta = $this->createFormBuilder($palabrasClaveOferta = new PalabrasClaveOferta())
    ->add('palabrasClave','textarea')
    ->add('Enviar','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
    ->setAction($this->generateUrl('mostrarOfertas'))
    ->getForm();

    $formPalabrasClaveOferta->handleRequest($request);

    if($formPalabrasClaveOferta->isValid()){
      $palabrasClaveOfertaUser=$em->getRepository('PalabrasClaveOfertaBundle:PalabrasClaveOferta')->findBy( array('usuario' => $user->getId()));

      if($palabrasClaveOfertaUser!=null){
        $palabrasClaveOfertaUser[0]->setPalabrasClave($palabrasClaveOferta->getPalabrasClave());
        $em->flush();
      }
      else{
        $palabrasClaveOferta->setUsuario($this->container->get('security.context')->getToken()->getUser());
        $em->persist($palabrasClaveOferta);
        $em->flush();
      }
      return $this->redirect($request->getUri());
    }


    $paginator = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
      array_reverse($ofertas),
      $request->query->getInt('page', 1),
      4
      );


    $pagination->setCustomParameters(array(
      'style' => 'bottom',
      'span_class' => 'whatever'
      ));

     // Pass through the 3 above variables to calculate pages in twig
    return $this->render('OfertaBundle:Default:mostrarOfertas.html.twig',array('pagination' => $pagination,'formPalabrasClaveOferta' => $formPalabrasClaveOferta->createView() ));


  }

  /*
    =====================================================================================

    Método editar Oferta "editOferta":

    Permitirá modificar una oferta en funcion de la id dada por el metodo get(Request)

    Pasos del método:
      i) Obtendrá la oferta de la base de datos en función de la id dada por el metodo get(Request)
      ii) Construira el formulario de la oferta para modificarla, en el caso de encontrarla.
      iii) Comprueba si el formulario es valido:
          iii.i) En caso de serlo, modificara dicha oferta en la base de datos y la ruta de la imagen de la oferta tambien. Posteriormente,
                 direge a la plantilla que muestra todas las ofertas.
                 Localizacion: src/OfertaBundle/Resources/views/Default/mostrarOfertas.html.twig
          iii.ii) En caso de no serlo, dirige a la plantilla con el formulario para imprimir los fallos correspondientes.
                 Localizacion: src/OfertaBundle/Resources/views/Default/editOferta.html.twig

    =====================================================================================
  */


  public function editOfertaAction(Request $request){
    $session = $request->getSession();
    $em = $this->getDoctrine()->getManager();
    $msg=null;

    if($request->query->get('idOferta')!=null){
      $session->set('idOferta', $request->query->get('idOferta'));
    }
    else if ($session->get('idOferta')==null){
      return $this->redirectToRoute('mostrarOfertas');
    }


    $oferta=$em->getRepository('OfertaBundle:Oferta')->findById($session->get('idOferta'));

    $form = $this->construirFormularioEditar($oferta);

    $form->handleRequest($request);

    if ($request->getMethod() == 'POST') {
      $msg=null;

      $msg=$this->actualizarArchivo($oferta,$session,$form,$msg);



      if($msg!="correcto"){
        return $this->render('OfertaBundle:Default:editOferta.html.twig', array(
          'formOferta' => $form->createView(), 'mensaje' => $msg, 'oferta' => $oferta[0]
              //'disciplinas' => $disciplinas
          ));
      }

      else{
        $em = $this->getDoctrine()->getManager();
        $em->persist($oferta[0]);
        $em->flush();
        $session->remove('idOferta');
        $session->remove('nomOldBrochure');
        return $this->redirectToRoute('mostrarOferta', array('idOferta' => $oferta[0]->getId()));

      }

    }
    else{
      $session->set('nomOldBrochure', str_replace(' ', '', $oferta[0]->getBrochure()));
    }

    return $this->render('OfertaBundle:Default:editOferta.html.twig', array(
      'formOferta' => $form->createView(), 'mensaje' => $msg, 'oferta' => $oferta[0]
          //'disciplinas' => $disciplinas
      ));
  }

  /*
    =====================================================================================

    Método construir formulario "editOferta"

    Devuelve  el formulario para editar la oferta.

    =====================================================================================
  */

  public function construirFormularioEditar($oferta){

    return $form = $this->createFormBuilder($oferta[0])
        ->add('nombre','text')
        ->add('descripcion', 'textarea', array('label' => 'Descripcion', 'attr' => array('class' => 'descripcion')))
        ->add('condiciones', 'textarea', array('label' => 'Condiciones', 'attr' => array('class' => 'condiciones')))
        ->add('fechaInicio','datetime',array('widget' => 'single_text','date_format' => 'dd/MM/yyyy','attr' => array('class' => 'datepicker')))
        ->add('fechaFin','datetime',array('widget' => 'single_text','date_format' => 'dd/MM/yyyy','attr' => array('class' => 'datepicker')))
        ->add('contacto','email')
        ->add('Cambiar','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
        ->add('area', 'entity', array(
          'class' => 'AreaBundle:Area',
          'property' => 'nombre',
          'required' => true
          ))
        ->add('rama', 'entity', array(
          'class' => 'RamaBundle:Rama',
          'property' => 'nombre',
          'required' => true,
          'choices' => $oferta[0]->getArea()->getRamas()->toArray()
          ))
        ->add('disciplina', 'entity', array(
          'class' => 'DisciplinaBundle:Disciplina',
          'property' => 'nombre',
          'required' => true,
          'choices' => $oferta[0]->getRama()->getDisciplinas()->toArray()
          ))
        ->add('tipo', 'entity', array(
          'class' => 'TipoBundle:Tipo',
          'property' => 'nombre',
          'required' => true
          ))
        ->setAction($this->generateUrl('addOferta'))
        ->getForm();
  }

  /*
    =====================================================================================

    Método actualizar archivo "actualizarArchivo":

    Actualizara la imagen ligada la oferta.

    Pasos del método:
      i) Comprobara si hay un nuevo archivo en el formulario.
        i.i) Si lo hay, validara el formato del archivo: png, jpeg
          i.i.i) En caso de no serlo, devuelve un mensaje indicando que el formato no es el valido.
          i.i.ii) En caso de serlo:
            i.i.ii.i) Eliminara la antigua imagen asociada al archivo.
            i.i.ii.ii) Movera la nueva imagen, la redimensionara para que no se pixele y la renombrara en relacion al nombre de la oferta.
        i.ii) Si no lo hay, renombrara la imagen de la oferta en relacion con al nombre

      Nota: en el caso de no subir ninguna imagen o que el formato sea valido, devuelve un mensaje indicando que las operaciones se
            han realizado correctamente

    =====================================================================================
  */

  public function actualizarArchivo($oferta,$session,$form,$msg){
    $extension=null;
    $rename = false;

    if($_FILES['uploadedfile']['tmp_name']!=null){
      $uploadedfileload="true";

      if($_FILES['uploadedfile']['type'] =="image/png"){
        $extension=".png";
      }

      else if($_FILES['uploadedfile']['type'] =="image/jpeg"){
        $extension=".jpeg";
      }
      else{
        return "Formato no valido, formatos validos: jpeg,png.";
      }
      $file_name=$_FILES['uploadedfile']['name'];
      $add=$this->getParameter('brochures_directory')."ofertas/".str_replace(' ', '', $oferta[0]->getNombre()).$extension;
      //$session->set('nomOldArchivo', str_replace(' ', '', str_replace(' ', '', $oferta[0]->getNombre()).$extension ));
      if($uploadedfileload=="true"){
        if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
          if((str_replace(' ', '', $oferta[0]->getNombre()).$extension)!=$session->get('nomOldBrochure')){
            unlink($this->getParameter('brochures_directory')."ofertas/".$session->get('nomOldBrochure'));
          }
          $this->smart_resize_image($this->getParameter('brochures_directory')."ofertas/".str_replace(' ', '', $oferta[0]->getNombre().$extension),
                                      null,
                                      $width = 500,
                                      $height = 500,
                                      true,
                                      $this->getParameter('brochures_directory')."ofertas/".str_replace(' ', '', $oferta[0]->getNombre().$extension),
                                      true,
                                      false,
                                      100);
          $rename = true;
          $oferta[0]->setBrochure(str_replace(' ', '', $oferta[0]->getNombre()).$extension);
        }

      }

    }

    if($rename==false){
      $nomArchivo = explode(".", $oferta[0]->getBrochure());

      if($extension==null){
        $extension=".".$nomArchivo[1];
      }

      rename($this->getParameter('brochures_directory')."ofertas/".$nomArchivo[0].$extension,
                                    $this->getParameter('brochures_directory')."ofertas/".str_replace(' ', '', $oferta[0]->getNombre()).$extension);
      $oferta[0]->setBrochure(str_replace(' ', '', $oferta[0]->getNombre()).$extension);
    }
    return "correcto";
  }

  /*
    =====================================================================================

    Método subir oferta "subirOferta":

    Subira una nueva oferta al sistema.

    Pasos del método:
      i) Construira un nuevo formulario con los campos correspondientes para añadir la nueva oferta.
      ii) Comprobara si el formulario es valido:
        ii.i) En el caso de serlo:
         ii.i.i) Guardara la imagen asociada a la oferta, redimensionara y nombrara en relacion al nombre de la oferta.
         ii.i.ii) Avisara si la nueva oferta esta relacionada con las palabras clave del sistema.
         ii.i.iii) Guardara la nueva oferta en la base de datos.
         ii.i.iv) Dirigira a la plantilla para imprimir todas las ofertas.
         Localizacion: src/OfertaBundle/Resources/views/Default/mostrarOfertas.html.twig
      iii) En el caso de no ser el formulario valido o sea nuevo, dirigira a la plantilla para imprimir el formulario y los errores
          correspondientes
          Localizacion: src/OfertaBundle/Resources/views/Default/subirOferta.html.twig

    =====================================================================================
  */

  public function subirOfertaAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $areas = $em->getRepository('AreaBundle:Area')->findAll();
    $ramas = $em->getRepository('RamaBundle:Rama')->findAll();
    $disciplinas = $em->getRepository('DisciplinaBundle:Disciplina')->findAll();
    $tipo = $em->getRepository('TipoBundle:Tipo')->findAll();

    if(!(count($areas)>0 && count($ramas)>0 && count($disciplinas)>0 && $tipo!=null)){
      return $this->redirectToRoute('mostrarOfertas', array('limpiarCriteriosBusquedas' => "si",'mensaje' => "noAñadir"));
    }

    $oferta = new Oferta();
    $em = $this->getDoctrine()->getManager();

    $formOferta = $this->construirFormularioSubir($oferta,$em);

    $formOferta->handleRequest($request);


    if($formOferta->isValid()){
      $file = $oferta->getBrochure();
      $extension = $file->guessExtension();


      $fileName = str_replace(' ', '', $oferta->getNombre()).'.'.$extension;

      $file->move(
        $this->getParameter('brochures_directory')."ofertas/",
        $fileName
        );

      $this->smart_resize_image($this->getParameter('brochures_directory')."ofertas/".$fileName,
                                  null,
                                  $width = 2000,
                                  $height = 1000,
                                  true,
                                  $this->getParameter('brochures_directory')."ofertas/".$fileName,
                                  true,
                                  false,
                                  100);


      $oferta->setBrochure(str_replace(' ', '', $oferta->getNombre()).".".$extension);


      $this->avisarNuevaOferta($oferta,$em);

      $oferta->setAutor($this->getUser());
      $em = $this->getDoctrine()->getManager();
      $em->persist($oferta);
      $em->flush();


      return $this->redirectToRoute('mostrarOfertas', array('limpiarCriteriosBusquedas' => "si"));
    }




    return $this->render('OfertaBundle:Default:addOferta.html.twig', array(
      'formOferta' => $formOferta->createView()
      ));
  }

  /*
    =====================================================================================

    Método construir formulario "subirOferta"

    Devuelve  el formulario para subir la oferta.

    =====================================================================================
  */

  public function construirFormularioSubir($oferta,$em){
    $em = $this->getDoctrine()->getManager();
    $areas = $em->getRepository('AreaBundle:Area')->findAll();

    return $form =  $this->createFormBuilder($oferta)
    ->add('nombre','text')
    ->add('descripcion', 'textarea', array('label' => 'Descripcion', 'attr' => array('class' => 'descripcion')))
    ->add('condiciones', 'textarea', array('label' => 'Condiciones', 'attr' => array('class' => 'condiciones')))
    ->add('fechaInicio','datetime',array('widget' => 'single_text','date_format' => 'dd/MM/yyyy','attr' => array('class' => 'datepicker')))
    ->add('fechaFin','datetime',array('widget' => 'single_text','date_format' => 'dd/MM/yyyy','attr' => array('class' => 'datepicker')))
    ->add('contacto','email')
    ->add('Añadir','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
    ->add('area', 'entity', array(
      'class' => 'AreaBundle:Area',
      'property' => 'nombre',
      'required' => true,
      'data'=>$em->getReference("AreaBundle:Area",1)
      ))
    ->add('rama', 'entity', array(
      'class' => 'RamaBundle:Rama',
      'property' => 'nombre',
      'required' => true,
      'choices' => $areas[0]->getRamas()->toArray()
      ))
    ->add('disciplina', 'entity', array(
      'class' => 'DisciplinaBundle:Disciplina',
      'property' => 'nombre',
      'required' => true
      ))
    ->add('tipo', 'entity', array(
      'class' => 'TipoBundle:Tipo',
      'property' => 'nombre',
      'required' => true,
      'data'=>$em->getReference("TipoBundle:Tipo",1)
      ))
    ->add('brochure', FileType::class, array('label' => 'Brochure (IMAGE file)'))
    ->setAction($this->generateUrl('addOferta'))
    ->getForm();
  }

  /*
    =====================================================================================

    Método avisar Nueva Oferta "avisarNuevaOferta":

    Avisara si la oferta esta relacionada con las palabras clave del sistema

    Pasos del método:
      i) Obtendra todas las palabras del campo descripcion de la oferta.
      ii) Obtendra todas las palabras clave del sistema de todos los usuarios.

      iii) Recorrerá todas las palabras clave de cada usuario
        iii.i) Recorrera cada una de las palabras clave de cada usuario
         iii.i.i) Recorrera todas las palabras del campo descripcion de la oferta
          iii.i.i.i) Comrprobara si la palabra clave y la palabra del campo descripcion son iguales
            iii.i.i.i) En el caso de serlo, las guardara en las palabras encontradas

        iv.i) Si las palabras encontradas no esta vacia, le enviara un mensaje al usuario informando de la oferta

    =====================================================================================
  */

public function avisarNuevaOferta($oferta,$em){

  $palabrasDescripcion=explode(" ", $oferta->getDescripcion());
  $palabrasClaveUsuario= $em->getRepository('PalabrasClaveOfertaBundle:PalabrasClaveOferta')->findAll();

  for($i=0; $i<count($palabrasClaveUsuario);$i=$i+1){
    $encontrado=false;
    $palabrasClave=explode(" ", $palabrasClaveUsuario[$i]->getPalabrasClave());
    $palabrasEncontradas = " ";

    for($j=0; $j<count($palabrasClave);$j=$j+1){
      for($k=0; $k<count($palabrasDescripcion);$k=$k+1){
        $pos = strpos(strtoupper($palabrasClave[$j]), strtoupper($palabrasDescripcion[$k]));

        if(!($pos===false)){
          $palabrasEncontradasAux= $palabrasEncontradas;
          $palabrasEncontradas= $palabrasEncontradasAux.strtoupper($palabrasClave[$j])." ";
          $encontrado=true;
        }
      }

    }


    if($encontrado==true){
      $message = \Swift_Message::newInstance()
      ->setSubject('Encontrada oferta')
      ->setFrom("lorenrr1@gmail.com")
      ->setTo("lorenrr1@gmail.com")
      ->setBody(
        "Encontrada oferta, cuyo nombre es ".$oferta->getNombre().", con las siguientes palabras clave: ".$palabrasEncontradas
        )
      ;
      $this->get('mailer')->send($message);
    }

  }

}

/*
  =====================================================================================

  Método buscar oferta por descripcion "searchOferta"

  Mostrara ofertas en funcion al area, rama, disciplina y tipo seleccionados ademas de aquellas que coincidan en el
  campo descripcion con las palabras introducidas en el buscador.

  Pasos del método:
    i) Obtendra la sesion y las palabras introducidas en el buscador.

    ii) Llamara al metodo "obtenerOfertasPorDescripcion" para obtener ofertas en funcion a los filtros seleccionados y las palabras
        introducidas en el buscador

    iii) Recorrera cada uno de los resultados
      iii.i) Guardara de cada resultado el titulo, imagen, descripcion y la ruta hacia la imagen

    iv) EL resultado final lo serializara para enviarlo mediante una respuesta Json al div resultados de la plantilla correspondiente.

    Localizacion: src/OfertaBundle/Resources/views/Default/mostrarOfertas.html.twig

  =====================================================================================
*/

public function searchOfertaAction(Request $request){
  $session = $request->getSession();
  $searchterm = $request->query->get('term');
  $em = $this->getDoctrine()->getManager();
  $palabrasBusqueda=explode(" ", $searchterm);

  dump("palabras Buscador");
  dump($searchterm);
  dump("palabras Buscador Trasformadas");
  dump($palabrasBusqueda);
  exit;

  $resultados = $this->obtenerOfertasPorDescripcion($session,$palabrasBusqueda,$em);

  foreach ($resultados as $resultado){
    $new_row['title']= $resultado->getNombre();
    $new_row['image']= $resultado->getBrochure();
    $new_row['description'] = $resultado->getDescripcion();
    foreach ($palabrasBusqueda as $palabraBuscar){
      $new_row['description'] = str_ireplace($palabraBuscar, "<strong>".strtoupper($palabraBuscar)."</strong>", $new_row['description']);
    }
    $new_row['path'] = $this->generateUrl('mostrarOferta',array('idOferta' => $resultado->getId()));
    $row_set[] = $new_row; //build an array
  }

  $encoders = array(new XmlEncoder(), new JsonEncoder());
  $normalizers = array(new ObjectNormalizer());

  $serializer = new Serializer($normalizers, $encoders);


  return new JsonResponse($row_set);
}
/*
  =====================================================================================

  Método obtener oferta por descripcion "obtenerOfertasPorDescripcion"

  Devolvera ofertas en funcion al area, rama, disciplina y tipo seleccionados ademas de aquellas que coincidan en el
  campo descripcion con las palabras introducidas en el buscador.

  Pasos del método:
    i) Comprobara si se ha seleccionado Area, Rama, Disciplina y Tipo
      i.i) Si es asi, filtrara las ofertas en funcion Area, Rama, Disciplina, Tipo y la primera palabra introducida en el buscador.
    ii) Si no es asi, comprobara si se ha seleccionado Area, Rama y Disciplina.
      ii.i) Si es asi, filtrara las ofertas en funcion Area, Rama, Disciplina y la primera palabra introducida en el buscador.
    iii) Si no es asi, comprobara si se ha seleccionado Area, Rama y Tipo.
      iii.i) Si es asi, filtrara las ofertas en funcion Area, Rama, Tipo y la primera palabra introducida en el buscador.
    iv) Si no es asi, comprobara si se ha seleccionado Area y Rama.
      iv.i) Si es asi, filtrara las ofertas en funcion Area, Rama y la primera palabra introducida en el buscador.
    v) Si no es asi, comprobara si se ha seleccionado Area y Tipo.
      v.i) Si es asi, filtrara las ofertas en funcion Area, Tipo y la primera palabra introducida en el buscador.
    vi) Si no es asi, comprobara si se ha seleccionado Area.
        vi.i) Si es asi, filtrara las ofertas en funcion Area y la primera palabra introducida en el buscador.
    vii) En el caso de no tener seleccionado nada.
        vii.i) Filtrara las ofertas en funcion a la primera palabra introducida en el buscador.

    viii) Recorrera cada una de las palabras introducidas en el buscador, desde la segunda.
        viii.i) Recorrera todos los resultados obtenidos anteriormente
          viii.i.i) Filtrara aquellos resultados que contengan todas las palabras introducidas en el buscador.

    ix) Devuelve el resultado final.

  =====================================================================================
*/

  public function obtenerOfertasPorDescripcion($session,$palabrasBusqueda,$em){
    $query = null;

    if($session->get('area_id')!=null && $session->get('rama_id')!=null && $session->get('disciplina_id')!=null && $session->get('disciplina_id')!=null && $session->get('tipo_id')!=null) {
      $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE
        o.descripcion like :searchterm
        AND o.area = :id_area AND o.rama = :id_rama AND o.disciplina = :id_disciplina AND o.tipo = :id_tipo")
        ->setParameter('searchterm', '%'.$palabrasBusqueda[0].'%')
        ->setParameter('id_area', $session->get('area_id'))
        ->setParameter('id_rama', $session->get('rama_id'))
        ->setParameter('id_disciplina', $session->get('disciplina_id'))
        ->setParameter('id_tipo', $session->get('tipo_id'));
    }
    else if($session->get('area_id')!=null && $session->get('rama_id')!=null && $session->get('disciplina_id')!=null && $session->get('disciplina_id')!=null) {
      $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE
        o.descripcion like :searchterm
        AND o.area = :id_area AND o.rama = :id_rama AND o.disciplina = :id_disciplina")
        ->setParameter('searchterm', '%'.$palabrasBusqueda[0].'%')
        ->setParameter('id_area', $session->get('area_id'))
        ->setParameter('id_rama', $session->get('rama_id'))
        ->setParameter('id_disciplina', $session->get('disciplina_id'));
    }

    else if($session->get('area_id')!=null && $session->get('rama_id')!=null  && $session->get('tipo_id')!=null) {
      $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE
        o.descripcion like :searchterm
        AND o.area = :id_area AND o.rama = :id_rama AND o.tipo = :id_tipo")
        ->setParameter('searchterm', '%'.$palabrasBusqueda[0].'%')
        ->setParameter('id_area', $session->get('area_id'))
        ->setParameter('id_rama', $session->get('rama_id'))
        ->setParameter('id_tipo', $session->get('tipo_id'));
    }
    else if($session->get('area_id')!=null && $session->get('rama_id')!=null) {
      $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE
        o.descripcion like :searchterm
        AND o.area = :id_area AND o.rama = :id_rama")
        ->setParameter('searchterm', '%'.$palabrasBusqueda[0].'%')
        ->setParameter('id_area', $session->get('area_id'))
        ->setParameter('id_rama', $session->get('rama_id'));
    }

    else if($session->get('area_id')!=null & $session->get('tipo_id')!=null) {
        $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE
        o.descripcion like :searchterm
        AND o.area = :id_area  AND o.tipo = :id_tipo")
        ->setParameter('searchterm', '%'.$palabrasBusqueda[0].'%')
        ->setParameter('id_area', $session->get('area_id'))
        ->setParameter('id_tipo', $session->get('tipo_id'));
    }

    else if($session->get('area_id')!=null) {
        $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE
        o.descripcion like :searchterm
        AND o.area = :id_area ")
        ->setParameter('searchterm', '%'.$palabrasBusqueda[0].'%')
        ->setParameter('id_area', $session->get('area_id'));
    }

    else if($session->get('tipo_id')!=null) {
        $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE
        o.descripcion like :searchterm
        AND o.tipo = :id_tipo ")
        ->setParameter('searchterm', '%'.$palabrasBusqueda[0].'%')
        ->setParameter('id_tipo', $session->get('tipo_id'));
    }

    else {
      $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE
        o.descripcion like :searchterm ")
        ->setParameter('searchterm', '%'.$palabrasBusqueda[0].'%');
    }

    $resultados=$query->getResult();

    if(array_search("", $palabrasBusqueda)){
      unset($palabrasBusqueda[array_search("", $palabrasBusqueda)]);
    }

    for($i=1; $i<count($palabrasBusqueda); $i=$i+1){
      foreach ($resultados as $resultado){
        $pos = strpos(strtoupper($resultado->getDescripcion()), strtoupper($palabrasBusqueda[$i]));

        if($pos===false){
            unset($resultados[array_search($resultado, $resultados)]);
          }

      }
    }

    return $resultados;


  }

  /*
    =====================================================================================

    Método obtener oferta por Area, Rama, Disciplina y Tipo "getQueryOfertas"

    Devolvera ofertas en funcion al area, rama, disciplina y tipo seleccionados en la aplicacion.

    Pasos del método:
      i) Comprobara si se ha seleccionado Area, Rama, Disciplina y Tipo
        i.i) Si es asi, filtrara las ofertas en funcion del Area, Rama, Disciplina y Tipo
      ii) Si no es asi, comprobara si se ha seleccionado Area, Rama y Disciplina.
        ii.i) Si es asi, filtrara las ofertas en funcion del Area, Rama y Disciplina.
      iii) Si no es asi, comprobara si se ha seleccionado Area, Rama y Tipo.
        iii.i) Si es asi, filtrara las ofertas en funcion del Area, Rama y Tipo.
      iv) Si no es asi, comprobara si se ha seleccionado Area y Rama.
        iv.i) Si es asi, filtrara las ofertas en funcion del Area y Rama.
      v) Si no es asi, comprobara si se ha seleccionado Area y Tipo.
        v.i) Si es asi, filtrara las ofertas en funcion del Area y Tipo.
      vi) Si no es asi, comprobara si se ha seleccionado Area.
          vi.i) Si es asi, filtrara las ofertas en funcion del Area
      vii) En el caso de no tener seleccionado nada.
          vii.i) Obtendra todas las ofertas.

      ix) Devuelve las ofertas encontradas.

    =====================================================================================
  */

  public function getQueryOfertas($areaId,$ramaId,$disciplinaId,$tipoId, Request $request){
    $session = $request->getSession();
    $em = $this->getDoctrine()->getManager();
    $ofertas= $em->getRepository('OfertaBundle:Oferta')->findAll();

    if($tipoId==null){
      if($session->get('tipo_id')!=null){
        $tipoId=$session->get('tipo_id');
      }
    }
    if($areaId==null){
      if($session->get('area_id')!=null){
        $areaId=$session->get('area_id');
      }
     if($session->get('rama_id')!=null){
        $ramaId=$session->get('rama_id');
      }
     if($session->get('disciplina_id')!=null){
        $disciplinaId=$session->get('disciplina_id');
      }
    }


    if($areaId!=null && $ramaId!=null && $disciplinaId!=null && $tipoId!=null ) {

      $area = $this->getDoctrine()
      ->getRepository('AreaBundle:Area')
      ->find($areaId);

      $rama = $this->getDoctrine()
      ->getRepository('RamaBundle:Rama')
      ->find($ramaId);


      $disciplina = $this->getDoctrine()
      ->getRepository('DisciplinaBundle:Disciplina')
      ->find($disciplinaId);

      $tipo = $this->getDoctrine()
      ->getRepository('TipoBundle:Tipo')
      ->find($tipoId);

      $session->set('area_id', $areaId);
      $session->set('rama_id', $ramaId);
      $session->set('disciplina_id', $disciplinaId);
      $session->set('tipo_id', $tipoId);
      $ofertas = $em->getRepository('OfertaBundle:Oferta')->findBy( array('area' => $areaId,'rama' => $ramaId , 'disciplina' => $disciplinaId, 'tipo' => $tipoId ));
      if(count($ofertas)>0){
        $session->set('seccion', "Resultado en la categoría: ".$area->getNombre()."/".$rama->getNombre()."/".$disciplina->getNombre());
        $session->set('tipoOferta', "Resultado en el tipo: ".$tipo->getNombre());
      }
      else{
        $session->set('seccion', 'Ningún resultado en la categoría: '.$area->getNombre()."/".$rama->getNombre()."/".$disciplina->getNombre());
        $session->set('tipoOferta', "Ningún resultado en el tipo: ".$tipo->getNombre());
      }
    }

    else if($areaId!=null && $ramaId!=null && $disciplinaId!=null) {

      $area = $this->getDoctrine()
      ->getRepository('AreaBundle:Area')
      ->find($areaId);

      $rama = $this->getDoctrine()
      ->getRepository('RamaBundle:Rama')
      ->find($ramaId);


      $disciplina = $this->getDoctrine()
      ->getRepository('DisciplinaBundle:Disciplina')
      ->find($disciplinaId);

      $session->set('area_id', $areaId);
      $session->set('rama_id', $ramaId);
      $session->set('disciplina_id', $disciplinaId);
      $ofertas = $em->getRepository('OfertaBundle:Oferta')->findBy( array('area' => $areaId,'rama' => $ramaId , 'disciplina' => $disciplinaId ));
      if(count($ofertas)>0){
        $session->set('seccion', "Resultado en la categoría: ".$area->getNombre()."/".$rama->getNombre()."/".$disciplina->getNombre());
      }
      else{
        $session->set('seccion', 'Ningún resultado en la categoría: '.$area->getNombre()."/".$rama->getNombre()."/".$disciplina->getNombre());
      }
    }
    else if($areaId!=null && $ramaId!=null && $tipoId!=null){

      $area = $this->getDoctrine()
      ->getRepository('AreaBundle:Area')
      ->find($areaId);

      $rama = $this->getDoctrine()
      ->getRepository('RamaBundle:Rama')
      ->find($ramaId);

      $tipo = $this->getDoctrine()
      ->getRepository('TipoBundle:Tipo')
      ->find($tipoId);

      $session->set('rama_id', $ramaId);
      $session->set('area_id', $areaId);
      $session->set('tipo_id', $tipoId);
      $session->remove('disciplina_id');
      $ofertas = $em->getRepository('OfertaBundle:Oferta')->findBy( array('area' => $areaId,'rama' => $ramaId, 'tipo' => $tipoId));
      if(count($ofertas)>0){
        $session->set('seccion', "Resultado en la categoría: ".$area->getNombre()."/".$rama->getNombre());
        $session->set('tipoOferta', "Resultado en el tipo: ".$tipoId);
      }
      else{
        $session->set('seccion', "Ningún resultado en la categoría: ".$area->getNombre()."/".$rama->getNombre());
        $session->set('tipoOferta', "Ningún resultado en el tipo: ".$tipo->getNombre());
      }
    }
    else if($areaId!=null && $ramaId!=null){
      $area = $this->getDoctrine()
      ->getRepository('AreaBundle:Area')
      ->find($areaId);

      $rama = $this->getDoctrine()
      ->getRepository('RamaBundle:Rama')
      ->find($ramaId);

      $session->set('rama_id', $ramaId);
      $session->set('area_id', $areaId);
      $session->remove('disciplina_id');
      $ofertas = $em->getRepository('OfertaBundle:Oferta')->findBy( array('area' => $areaId,'rama' => $ramaId));
      if(count($ofertas)>0){
        $session->set('seccion', "Resultado en: ".$area->getNombre()."/".$rama->getNombre());
      }
      else{
        $session->set('seccion', 'Ningún resultado en la categoría: '. $area->getNombre()."/".$rama->getNombre());
      }
    }
    else if($areaId!=null && $tipoId!=null){
      $session->set('area_id', $areaId);
      $session->set('tipo_id', $tipoId);
      $session->remove('rama_id');
      $session->remove('disciplina_id');

      $area = $this->getDoctrine()
      ->getRepository('AreaBundle:Area')
      ->find($areaId);


      $tipo = $this->getDoctrine()
      ->getRepository('TipoBundle:Tipo')
      ->find($tipoId);

      $ofertas = $em->getRepository('OfertaBundle:Oferta')->findBy( array('area' => $areaId, 'tipo' => $tipoId));
      if(count($ofertas)>0){
        $session->set('seccion', "Resultado en la categoría: ".$area->getNombre());
        $session->set('tipoOferta', "Resultado en el tipo: ".$tipo->getNombre());
      }
      else{
        $session->set('seccion', "Ningún resultado en la categoría: ".$area->getNombre());
        $session->set('tipoOferta', 'Ningún resultado en el tipo: '.$tipo->getNombre());
      }
    }
    else if($tipoId!=null){
      $session->set('tipo_id', $tipoId);
      $session->remove('area_id');
      $session->remove('rama_id');
      $session->remove('disciplina_id');

      $tipo = $this->getDoctrine()
      ->getRepository('TipoBundle:Tipo')
      ->find($tipoId);

      $ofertas = $em->getRepository('OfertaBundle:Oferta')->findBy( array('tipo' => $tipoId));
      if(count($ofertas)>0){
        $session->set('tipoOferta', "Resultado en el tipo: ".$tipoId);
      }
      else{
        $session->set('tipoOferta', 'Ningún resultado en el tipo: '.$tipo->getNombre());
      }
    }
    else if($areaId!=null){

      $area = $this->getDoctrine()
      ->getRepository('AreaBundle:Area')
      ->find($areaId);

      $session->set('area_id', $areaId);
      $session->remove('rama_id');
      $session->remove('disciplina_id');
      $ofertas = $em->getRepository('OfertaBundle:Oferta')->findBy( array('area' => $areaId));
      if(count($ofertas)>0){
        $session->set('seccion', "Resultado en: ".$areaId[0]);
      }
      else{
        $session->set('seccion', 'Ningún resultado en la categoría: '.$area->getNombre());
      }
    }
    else{
      $session->remove('area_id');
      $session->remove('rama_id');
      $session->remove('disciplina_id');
      $session->remove('tipo');
      $session->set('seccion', 'No hay establecida ninguna categoría.');
      $session->set('tipoOferta', 'No hay establecido ningún tipo de oferta.');
    }


    return $ofertas;
  }


  function smart_resize_image($file,
                              $string             = null,
                              $width              = 0,
                              $height             = 0,
                              $proportional       = false,
                              $output             = 'file',
                              $delete_original    = true,
                              $use_linux_commands = false,
                              $quality            = 100,
                              $grayscale          = false
  		 ) {

    if ( $height <= 0 && $width <= 0 ) return false;
    if ( $file === null && $string === null ) return false;
    # Setting defaults and meta
    $info                         = $file !== null ? getimagesize($file) : getimagesizefromstring($string);
    $image                        = '';
    $final_width                  = 0;
    $final_height                 = 0;
    list($width_old, $height_old) = $info;
	$cropHeight = $cropWidth = 0;
    # Calculating proportionality
    if ($proportional) {
      if      ($width  == 0)  $factor = $height/$height_old;
      elseif  ($height == 0)  $factor = $width/$width_old;
      else                    $factor = min( $width / $width_old, $height / $height_old );
      $final_width  = round( $width_old * $factor );
      $final_height = round( $height_old * $factor );
    }
    else {
      $final_width = ( $width <= 0 ) ? $width_old : $width;
      $final_height = ( $height <= 0 ) ? $height_old : $height;
	  $widthX = $width_old / $width;
	  $heightX = $height_old / $height;

	  $x = min($widthX, $heightX);
	  $cropWidth = ($width_old - $width * $x) / 2;
	  $cropHeight = ($height_old - $height * $x) / 2;
    }
    # Loading image to memory according to type
    switch ( $info[2] ) {
      case IMAGETYPE_JPEG:  $file !== null ? $image = imagecreatefromjpeg($file) : $image = imagecreatefromstring($string);  break;
      case IMAGETYPE_GIF:   $file !== null ? $image = imagecreatefromgif($file)  : $image = imagecreatefromstring($string);  break;
      case IMAGETYPE_PNG:   $file !== null ? $image = imagecreatefrompng($file)  : $image = imagecreatefromstring($string);  break;
      default: return false;
    }

    # Making the image grayscale, if needed
    if ($grayscale) {
      imagefilter($image, IMG_FILTER_GRAYSCALE);
    }

    # This is the resizing/resampling/transparency-preserving magic
    $image_resized = imagecreatetruecolor( $final_width, $final_height );
    if ( ($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG) ) {
      $transparency = imagecolortransparent($image);
      $palletsize = imagecolorstotal($image);
      if ($transparency >= 0 && $transparency < $palletsize) {
        $transparent_color  = imagecolorsforindex($image, $transparency);
        $transparency       = imagecolorallocate($image_resized, $transparent_color['red'], $transparent_color['green'], $transparent_color['blue']);
        imagefill($image_resized, 0, 0, $transparency);
        imagecolortransparent($image_resized, $transparency);
      }
      elseif ($info[2] == IMAGETYPE_PNG) {
        imagealphablending($image_resized, false);
        $color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);
        imagefill($image_resized, 0, 0, $color);
        imagesavealpha($image_resized, true);
      }
    }
    imagecopyresampled($image_resized, $image, 0, 0, $cropWidth, $cropHeight, $final_width, $final_height, $width_old - 2 * $cropWidth, $height_old - 2 * $cropHeight);


    # Taking care of original, if needed
    if ( $delete_original ) {
      if ( $use_linux_commands ) exec('rm '.$file);
      else @unlink($file);
    }
    # Preparing a method of providing result
    switch ( strtolower($output) ) {
      case 'browser':
        $mime = image_type_to_mime_type($info[2]);
        header("Content-type: $mime");
        $output = NULL;
      break;
      case 'file':
        $output = $file;
      break;
      case 'return':
        return $image_resized;
      break;
      default:
      break;
    }

    # Writing image according to type to the output destination and image quality
    switch ( $info[2] ) {
      case IMAGETYPE_GIF:   imagegif($image_resized, $output);    break;
      case IMAGETYPE_JPEG:  imagejpeg($image_resized, $output, $quality);   break;
      case IMAGETYPE_PNG:
        $quality = 9 - (int)((0.9*$quality)/10.0);
        imagepng($image_resized, $output, $quality);
        break;
      default: return false;
    }
    return true;
  }

  /*
    =====================================================================================

    Método obtener la grafica de visitas por anio

    Devolvera la grafica de visitas correspondientes al anio.

    Pasos del método:
      i) Recorrera cada uno de los meses del anio.
       i.i) Si el primer mes del anio no es enero(mes=1)
        i.i.i) Dibujara los meses anteriores indicando que tienen 0 visitas.

       i.ii) Recorrera cada uno de los dias del mes.
        i.ii.i) Comprueba si el primer dia del mes es mayor que 1( el usuario no habrá visitado los dias anteriores del mes)
          i.ii.i.i) Si es asi, dibujara los demas dias indicando que tiene 0 visitas.
        i.ii.ii) Dibuja el dia correspondiente al mes de la iteracion.
        i.ii.iii) Comprueba si el siguiente dia a dibujar es mayor a uno( el usuario no habrá visitado en varios dias)
          i.ii.iii.i) Si es asi, dibujara los demas dias indicando que tiene 0 visitas hasta el siguiente dia de la iteracion
        i.ii.iv) Comprueba si el ultimo dia a dibujar no es ultimo del mes correspondiente
          i.ii.iii.i) Si es asi, dibujara los demas dias indicando que tiene 0 visitas hasta el final del mes

       i.iii) Comprueba si el siguiente mes a dibujar es mayor a uno( el usuario no habrá visitado en varios meses)
        i.iii.i) Si es asi, dibujara los demas mes indicando que tiene 0 visitas hasta el siguiente mes de la iteracion

       i.iv) Comprueba si el ultimo mes a dibujar no es ultimo del anio correspondiente
        i.iv.i) Si es asi, dibujara los demas meses indicando que tiene 0 visitas hasta el final del anio


      ix) Devuelve la grafica de las ofertas por Anio

    =====================================================================================
  */

  public function getGraficaPorAnio($anio){
    $topeMeses=count($anio->getVisitasMes());
    $topeMes=0;
    $ob = new Highchart();


    $ob->chart->renderTo('linechart');
    $ob->chart->type('column');
    $ob->title->text('Visitas Oferta. Año:'.' '.$anio->getAnio());

    $ob->plotOptions->series(
          array(
              'dataLabels' => array(
                  'enabled' => true,
                  'format' => '<p><small>{point.name}: {point.y:.0f}<br></small></p>',
                  'style'     => array('color' => '#AA4643', 'font-size' => '0px')
              )
          )
      );



    $ob->tooltip->headerFormat('<span style="color:{point.color} style="font-size:12px>{point.name}</span>');
    $ob->tooltip->footerFormat('<span style="font-size:12px>{point.name}</span>');
    $ob->tooltip->pointFormat('<span style="color:{point.color}; font-size: 10px;">{point.name}</span>: <b>{point.y:.0f}</b> visitas<br/>');
    $ob->yAxis->tickInterval(5);
    $ob->xAxis->tickInterval(1);
    $ob->xAxis->setMax(5);
    $ob->yAxis->title(array('text'  => "Visitas"));
    $ob->chart->zoomType('x');

    for($i=0; $i<$topeMeses; $i=$i+1){
      $mes=$anio->getVisitasMes()[$i];

      if($i==0){

        if($mes->getMes()>1){
          for($k=1; $k<$mes->getMes();$k=$k+1){
            $visitasMes[]=array(
                      'name' => $k."/".$anio->getAnio(),
                      'y' => 0,
                      'drilldown' =>  $k."/".($mes->getMes()+$k),
            );
          }
        }
      }

      $aux=array(
                'name' => $mes->getMes()."/".$anio->getAnio(),
                'y' => $mes->getVisitas(),
                'drilldown' =>  $anio->getAnio()."/".$mes->getMes(),
      );
      for($j=0; $j<count($mes->getVisitasDia()); $j=$j+1){
        $dia=$mes->getVisitasDia()[$j];
        if($j==0){
          if($dia->getDia()>1){
            for($k=1; $k<$dia->getDia();$k=$k+1){
              $visitasDia[]=array($k."/".$mes->getMes(),0);
            }
          }
        }


        $visitasDia[]=array($dia->getDia()
                              ."/".$mes->getMes(),
                              $dia->getVisitas());

        if($j<(count($mes->getVisitasDia())-1)){
          $diaSiguiente = $mes->getVisitasDia()[$j+1];
          if($diaSiguiente->getDia()>($dia->getDia()+1)){
            $intervalo=$diaSiguiente->getDia()-$dia->getDia();
            for($k=1; $k<$intervalo;$k=$k+1){
              $visitasDia[]=array(($dia->getDia()+$k)
                                    ."/".$mes->getMes(),
                                    0);
            }
          }
        }

        if($j==(count($mes->getVisitasDia())-1)){

          if($mes->getMes()<8){
            if($mes->getMes()%2==0){
              $topeMes=30;
            }
            else{
              $topeMes=31;
            }
          }
          else{
            if($mes->getMes()%2==0){
              $topeMes=31;
            }
            else{
              $topeMes=30;
            }
          }

          if($mes->getMes()==2){
            if($anio->getAnio()%4==0 && $anio->getAnio()%100!=0 && $anio->getAnio()%400==0 ){
              $topeMes=29;
            }
            else{
              $topeMes=28;
            }
          }

          if($dia->getDia()<$topeMes){
            $intervalo=$topeMes-$dia->getDia();
            for($k=1; $k<$intervalo+1;$k=$k+1){
              $visitasDia[]=array(($dia->getDia()+$k)
                                    ."/".$mes->getMes(),
                                    0);
            }

          }

        }


      }

      $visitasDiaMes[]=array(
                      'name' => "Visitas por dia. Mes: ".$mes->getMes()."/".$anio->getAnio(),
                      'id' => $anio->getAnio()."/".$mes->getMes(),
                      'data' => $visitasDia
      );

      $visitasMes[]=$aux;

      if($i<($topeMeses-1)) {
        if(($mes->getMes()+1)<$anio->getVisitasMes()[$i+1]->getMes()){
          $intervalo=$anio->getVisitasMes()[$i+1]->getMes()-$mes->getMes();
          for($k=1; $k<$intervalo+1;$k=$k+1){
            $visitasMes[]=array(
                      'name' => ($mes->getMes()+$k)."/".$anio->getAnio(),
                      'y' => 0,
                      'drilldown' =>  $anio->getAnio()."/".($mes->getMes()+$k),
            );
          }
        }
      }

      if($i==($topeMeses-1)){

        if($mes->getMes()<12){
          $intervalo=12-$mes->getMes();
          for($k=1; $k<$intervalo+1;$k=$k+1){
            $visitasMes[]=array(
                      'name' => ($mes->getMes()+$k)."/".$anio->getAnio(),
                      'y' => 0,
                      'drilldown' =>  $anio->getAnio()."/".($mes->getMes()+$k),
            );
          }
        }
      }



      unset($visitasDia);
      }



      $ob->series(
          array(
              array(
                  'name' => 'Visitas por meses'.". Año: ". $anio->getAnio(),
                  'colorByPoint' => true,
                  'data' => $visitasMes
              )
          )
      );

      $ob->drilldown->series($visitasDiaMes);
      $ob->xAxis->categories(array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31));
      $ob->drilldown->text('Visitas por dia');

      return $ob;
  }


}
