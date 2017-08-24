<?php


  namespace TipoBundle\Controller;

  use TipoBundle\Entity\Tipo;
  use Symfony\Component\Form\FormEvent;
  use Symfony\Component\Form\FormEvents;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\HttpFoundation\JsonResponse;
  /*
    =====================================================================================

    Controlador de la clase Tipo, para poder realizar las operaciones correspondientes en la
    aplicación.

    =====================================================================================
  */

    class DefaultController extends Controller
    {

  /*
    =====================================================================================

    Método añadir tipo "addTipo":

    A partir de un objeto de la clase "Tipo", se creará un formulario con los campos
    correspondientes a dicho objeto para crealo.

    Pasos del método:
      i) Se crea el formulario con dicho objeto.
      ii) Se comprueba si se ha enviado el formulario y los campos se han rellenado correctamente.
      iii) En el caso de que se hayan rellenado correctamente:
        Se guardarán el tipo.
      iiii) En caso contrario:
        Se enviará el formulario para que se rellenen los campos( en el caso de que no se hayan rellenado
        adecuadamente, con los mensajes de error correspondientes.)


    =====================================================================================
  */
    public function addTipoAction(Request $request)
    {

      $formTipo = $this->createFormBuilder($tipo=new Tipo())
      ->add('nombre','text')
      ->add('Añadir','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
      ->getForm();

      $formTipo->handleRequest($request);


      if($formTipo->isValid()){
        $nextAction = $formTipo->get('Añadir')->isClicked()
        ? 'editMenu'
        : 'addTipo';

        $em = $this->getDoctrine()->getManager();
        $em->persist($tipo);

        $em->flush();

        return $this->redirectToRoute('editarMenu');
      }


          //$disciplinas = $ramas->getDisciplinas();


          //return $this->redirect($this->generateUrl($nextAction));
      return $this->render('TipoBundle:Default:addTipo.html.twig', array(
        'form' => $formTipo->createView()
                //'ramas' => $rama
                //'disciplinas' => $disciplinas
        ));

    }

  /*
    =====================================================================================

    Método editar tipo "editarTipo":

    A partir de un objeto de la clase "Tipo", se creará un formulario con los campos
    correspondientes a dicho objeto para poder modificarlo.

    Pasos del método:
      i) Se crea el formulario con dicho objeto.
      ii) Se comprueba si se ha enviado el formulario y los campos se han rellenado correctamente.
      iii) En el caso de que se hayan rellenado correctamente:
        Se guardará el tipo modificado.
      iiii) En caso contrario:
        Se enviará el formulario para que se rellenen los campos( en el caso de que no se hayan rellenado
        adecuadamente, con los mensajes de error correspondientes.)


    =====================================================================================
  */
    public function editarTipoAction(Request $request)
    {

      $session = $request->getSession();

      $em = $this->getDoctrine()->getManager();
      $tipo=$em->getRepository('TipoBundle:Tipo')->findById($session->get('tipo_id'));

      if(count($tipo)==0){

        $mensaje = "Seleccione primero el tipo que desee editar.";

      $areas = $em->getRepository('AreaBundle:Area')->findAll();
      $tipos = $em->getRepository('TipoBundle:Tipo')->findAll();

      return $this->render('AreaBundle:Default:editMenu.html.twig', array(
        'mensaje' => $mensaje,'areas' => $areas, 'tipos' => $tipos
              //'ramas' => $rama
              //'disciplinas' => $disciplinas
        ));
      }

      $formTipo = $this->createFormBuilder($tipo[0])
      ->add('nombre','text')
      ->add('Cambiar','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
      ->getForm();

      $formTipo->handleRequest($request);


      if($formTipo->isValid()){
        $nextAction = $formTipo->get('Cambiar')->isClicked()
        ? 'editMenu'
        : 'editTipo';

        $em = $this->getDoctrine()->getManager();
        $em->persist($tipo[0]);

        $em->flush();

        return $this->redirectToRoute('editarMenu');
      }


          //$disciplinas = $ramas->getDisciplinas();


          //return $this->redirect($this->generateUrl($nextAction));
      return $this->render('TipoBundle:Default:editarTipo.html.twig', array(
        'form' => $formTipo->createView()
                //'ramas' => $rama
                //'disciplinas' => $disciplinas
        ));

    }

    /*
      =====================================================================================

      Método seleccionar Tipo "selectTipo":

      A partir de la id del Tipo dada por el metodo get(Request), lo guardara en la sesion


      =====================================================================================
    */



  public function selectTipoAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $session = $request->getSession();

    if($request->request->get('tipo_id')!=null){
      $session->set('tipo_id', $request->request->get('tipo_id'));
    }

    return new JsonResponse();

  }
  /*
    =====================================================================================

    Método eliminar Rama "eliminarRama":

    A partir de la id de la Rama dada por el metodo get(Request), la buscara en la base de datos y la eliminara

    Pasos del método:
      i) Obtiene la id por el metodo get(Request)
      ii) Busca el tipo en la base de datos.
      iiii) Elimina el tipo
      iv) Obtiene todas las ramas y tipos de la base de datos
      v)  Dirige hacia la opcion "editarMenu" de la aplicacion
         Localizacion: src/RamaBundle/Resources/views/Default/editMenu.html.twig



    =====================================================================================
  */
  public function deleteTipoAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $session = $request->getSession();
    $tipo=$em->getRepository('TipoBundle:Tipo')->findById($session->get('tipo_id'));
    $mensaje = null;

    if(count($tipo)==0){

      $mensaje = "Seleccione primero el tipo que desee eliminar.";
    }

    else {
      $mensaje = "El tipo se ha eliminado con éxito.";
      $oferta=$em->getRepository('OfertaBundle:Oferta')->findBy( array('tipo' => $tipo[0]->getId()));
      $oferta[0]->setTipo(null);
      $em->remove($tipo[0]);
      $em->flush();
    }

    $areas = $em->getRepository('AreaBundle:Area')->findAll();
    $tipos = $em->getRepository('TipoBundle:Tipo')->findAll();

    return $this->render('AreaBundle:Default:editMenu.html.twig', array(
        'mensaje' => $mensaje,'areas' => $areas, 'tipos' => $tipos
              //'ramas' => $rama
              //'disciplinas' => $disciplinas
        ));

  }

  }
