<?php

namespace OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OfertaBundle\Entity\Oferta;
use AreaBundle\Entity\Area;
use VisitasOfertaBundle\Entity\VisitasOferta;
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
use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;
use OfertaBundle\Form\EventListener\AddRamaField;
use OfertaBundle\Form\EventListener\AddDisciplinaFieldSubscriber;
use Symfony\Component\HttpFoundation\JsonResponse;
use PUGX\AutocompleterBundle\Form\Type\AutocompleteType;
use ComentarioBundle\Form\Type\ComentarioType;
use Ob\HighchartsBundle\Highcharts\Highchart;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DefaultController extends Controller
{
  public function chartAction(Request $request)
{
    $session = $request->getSession();
    $em = $this->getDoctrine()->getManager();
    $query = null;
    $ofertas=null;
    $max=null;

    if($_GET['numItem']!=null){
      $max=$_GET['numItem'];
    }
    else{
      $max=2;
    }

     if($session->get('area_id')!=null && $session->get('rama_id')!=null && $session->get('disciplina_id')!=null) {
          $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE 
                                    o.area = :id_area AND o.rama = :id_rama AND o.disciplina = :id_disciplina ORDER BY o.visitas ASC")
                              ->setParameter('id_area', $session->get('area_id'))
                              ->setParameter('id_rama', $session->get('rama_id'))
                              ->setParameter('id_disciplina', $session->get('disciplina_id'));
          $ofertas=$query->getResult();
     }
     else if($session->get('area_id')!=null && $session->get('rama_id')!=null) {
          $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE 
                                    o.area = :id_area AND o.rama = :id_rama ORDER BY o.visitas ASC")
                              ->setParameter('id_area', $session->get('area_id'))
                              ->setParameter('id_rama', $session->get('rama_id'))
                              ->orderBy('o.visitas', 'ASC');
          $ofertas=$query->getResult();
     }

     else if($session->get('area_id')!=null) {
          $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE o.area = :id_area ORDER BY o.visitas ASC")
                              ->setParameter('id_area', $session->get('area_id'))->orderBy('o.visitas', 'ASC');
            $ofertas=$query->getResult();
     }
     else{
      $ofertas=$this->getDoctrine()
          ->getRepository('OfertaBundle:Oferta')
          ->findAll();
     }


    $visitas = array();
    $nombres = array();
    $i=0;

    for($i=0; $i<$max; $i=$i+1){
      $visitas[] = $i;
      $nombres[]=$ofertas[$i]->getNombre();
    }


    // Chart
    $series = array(
        array("name" => "Data Serie Name",    "data" => $visitas)
    );
    $categories = $nombres;
    $ob = new Highchart();
    $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
    $ob->title->text('Chart Title');
    $ob->xAxis->title(array('text'  => "Horizontal axis title",  "data" => array("hola","hola","hola","hola","hola","hola","hola")));
    $ob->xAxis->categories($categories);
    $ob->yAxis->title(array('text'  => "Vertical axis title"));
    $ob->series($series);

    return $this->render('OfertaBundle:Default:grafica.html.twig', array(
        'chart' => $ob
    ));
}
  public function sendEmailAction()
{    
    $emisor=$_GET['emisor'];
    $receptor=$_GET['receptor'];
    $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom("lorenrr1@gmail.com")
        ->setTo("ronaldochencho@gmail.com")
        ->setBody(
            $this->renderView(
                'OfertaBundle:Default:oferta.html.twig',
                array('name' => "LorenManuKK")
            )
        )
    ;
    $this->get('mailer')->send($message);

    return $this->redirectToRoute('showOferta', array('id' => '1'));
}

  public function menuAction()
    {
    $areas = $this->getDoctrine()
          ->getRepository('AreaBundle:Area')
          ->findAll();

    //$disciplinas = $ramas->getDisciplinas();


    //return $this->redirect($this->generateUrl($nextAction));
    return $this->render('OfertaBundle:Default:menu.html.twig', array(
          'areas' => $areas
          //'disciplinas' => $disciplinas
        ));
    }

    public function menu2Action()
    {
    $areas = $this->getDoctrine()
          ->getRepository('AreaBundle:Area')
          ->findAll();

    //$disciplinas = $ramas->getDisciplinas();


    //return $this->redirect($this->generateUrl($nextAction));
    return $this->render('OfertaBundle:Default:menu2.html.twig', array(
          'areas' => $areas
          //'disciplinas' => $disciplinas
        ));
    }



  public function deleteCommentAction(){
    $id=$_GET['idComment'];

    $ofertaComentario = $this->getDoctrine()
          ->getRepository('ComentarioOfertaBundle:ComentarioOferta')
          ->find($id);

      if (!$ofertaComentario) {
          throw $this->createNotFoundException(
              'No oferta found for id '.$id
          );
      }

      $em = $this->getDoctrine()->getManager();
      $em->remove($ofertaComentario);
      $em->flush();

      $idOferta=$_GET['id'];

      $oferta = $this->getDoctrine()
            ->getRepository('OfertaBundle:Oferta')
            ->find($idOferta);

      if (!$oferta) {
            throw $this->createNotFoundException(
                'No oferta found for id '.$idOferta
            );
        }

    return $this->render('OfertaBundle:Default:oferta.html.twig', array('oferta' => $oferta));
}


  public function showOfertaAction(Request $request){
    $idOferta=$_GET['id'];

    $oferta = $this->getDoctrine()
          ->getRepository('OfertaBundle:Oferta')
          ->find($idOferta);

    if (!$oferta) {
          throw $this->createNotFoundException(
              'No oferta found for id '.$idOferta
          );
      }


    $url = $this->generateUrl('showOferta',array('id' => $oferta->getId()));

    $form = $this->createForm(new ComentarioType(),$comentario=new Comentario());

    $form->handleRequest($request);

      $em = $this->getDoctrine()->getManager();
      $visitas=$oferta->getVisitas()+1;
      $oferta->setVisitas($visitas);
      $em->persist($oferta);
      $em->flush();


    if($form->isValid()){
      $comentario->setAutor("lorenzo");
      $comentario->setFecha($oferta->getFechaInicio());
      $oferta->addComentario($comentario);


      $em->persist($comentario);
      $em->persist($oferta);
      $em->flush();


      return $this->redirectToRoute('showOferta', array('id' => $oferta->getId()));
    }

  return $this->render('OfertaBundle:Default:oferta.html.twig', array('oferta' => $oferta,'form' => $form->createView()));
  }



  public function mostrarOfertasAction($page=0,$cursorScroll=0,Request $request){
    $session = $request->getSession();
    // obtener el valor de un atributo de la sesión
    $foo = $session->get('area_id');


    $em = $this->getDoctrine()->getManager();
    $ofertas= $em->getRepository('OfertaBundle:Oferta')->findAll();

    if($request->query->get('area_id')!=null && $request->query->get('rama_id')!=null && $request->query->get('disciplina_id')!=null) {
      $session->set('area_id', $request->query->get('area_id'));
      $session->set('rama_id', $request->query->get('rama_id'));
      $session->set('disciplina_id', $request->query->get('disciplina_id'));
      $ofertas = $em->getRepository('OfertaBundle:Oferta')->findBy( array('area' => $request->query->get('area_id'),'rama' => $request->query->get('rama_id') , 'disciplina' => $request->query->get('disciplina_id') ));

    }
    else if($request->query->get('area_id')!=null && $request->query->get('rama_id')!=null){
      $session->set('rama_id', $request->query->get('rama_id'));
      $session->set('area_id', $request->query->get('area_id'));
      $session->remove('disciplina_id');
      $ofertas = $em->getRepository('OfertaBundle:Oferta')->findBy( array('area' => $request->query->get('area_id'),'rama' => $request->query->get('rama_id')));
    }
    else if($request->query->get('area_id')!=null){
      $session->set('area_id', $request->query->get('area_id'));
      $session->remove('rama_id');
      $session->remove('disciplina_id');
      $ofertas = $em->getRepository('OfertaBundle:Oferta')->findBy( array('area' => $request->query->get('area_id')));
    }
    else{
      $session->remove('area_id');
      $session->remove('rama_id');
      $session->remove('disciplina_id');
    }


    $paginator = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
            $ofertas,
            $request->query->getInt('page', 1),
            5
    );

    $pagination->setCustomParameters(array(
    'style' => 'bottom',
    'span_class' => 'whatever'
));

     // Pass through the 3 above variables to calculate pages in twig
    return $this->render('OfertaBundle:Default:index.html.twig',array('pagination' => $pagination));


  }

  public function portadaAction()
  {
    $em = $this->getDoctrine()->getManager();
    $vO = new VisitasOferta();
    $vO->setUsuario("prueba");
    $vO->setFecha(new \DateTime('yesterday'));
    $em->persist($vO);
    $em->flush();

    $entidad = new Oferta();

    $entidad->setNombre("pruebdxqqsszaqsq2qd1sd");
    $entidad->setSlug("prues2sdbx1qqszdqdqa");
    $entidad->setNombre("pssruse1xqqbsazqdqs2dba");
    $entidad->setSlug("prsuedbas21xqqdzsbqsqda");
    $entidad->setDescripcion("psruexbqdszqq1qa2dsdru2desba");
    $entidad->setCondiciones("qprsd2xsq1szdquqdebsa");
    $entidad->setRutaFoto("pddrs1qsuex2qdszbqqa");
    $entidad->setFechaInicio(new \DateTime('today'));
    $entidad->setFechaFin(new \DateTime('today'));
    $entidad->setContacto("pruebsddssqxsqs1zdqq2a");
    //$entidad->setConocimiento("prdudssqx1dsqzqqesb2a");
    $entidad->setPalabrasClave("pdrsusqsx1qsqzdqdeb2a");
    $em->persist($entidad);
    //$em->flush();


    /*
    $oferta = $em->getRepository('OfertaBundle:Oferta')->findOneBy(array(
                                  'nombre' => 'prueba2dd',
                                ));
    */
    if (!$entidad) {
        throw $this->createNotFoundException('No se ha encontrado la oferta del día');
    }

    return $this->render('OfertaBundle:Default:portada.html.twig.php', array('oferta' => $entidad));
  }

  public function editOfertaAction(Request $request){
    $session = $request->getSession();
    if($request->query->get('idOferta')!=null){
      $session->set('idOferta', $request->query->get('idOferta'));
    }
    $em = $this->getDoctrine()->getManager();
    $oferta=$em->getRepository('OfertaBundle:Oferta')->findById($session->get('idOferta'));
    $areas = $this->getDoctrine()->getRepository('AreaBundle:Area')->createQueryBuilder('c')
                        ->orderBy('c.id', 'ASC');
    $ramas = $this->getDoctrine()->getRepository('RamaBundle:Rama')->createQueryBuilder('c')
                        ->orderBy('c.id', 'ASC');
    $disciplinas = $this->getDoctrine()->getRepository('DisciplinaBundle:Disciplina')->createQueryBuilder('c')
                        ->orderBy('c.id', 'ASC');

    $form = $this->createFormBuilder($oferta[0])
                  ->add('nombre','text')
                  ->add('descripcion', 'textarea', array('label' => 'Descripcion', 'attr' => array('class' => 'descripcion')))
                  ->add('condiciones','textarea')
                  ->add('fechaInicio','datetime',array('widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => array('class' => 'datepicker')))
                  ->add('fechaFin','datetime',array('widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => array('class' => 'datepicker')))
                  ->add('contacto','email')
                  ->add('saveAndAdd','submit')
                  ->add('area', 'entity', array(
                    'class' => 'AreaBundle:Area',
                    'property' => 'nombre',
                    'query_builder' => $areas,    
                  ))
                  ->add('rama', 'entity', array(
                    'class' => 'RamaBundle:Rama',
                    'property' => 'nombre',
                    'query_builder' => $ramas
                  ))
                  ->add('disciplina', 'entity', array(
                    'class' => 'DisciplinaBundle:Disciplina',
                    'property' => 'nombre',
                    'query_builder' => $disciplinas
                  ))
                  ->add('brochure', 'file', array('data_class' => null))
                  ->setAction($this->generateUrl('addOferta'))
                  ->getForm();
    
    if ($request->getMethod() == 'POST') {
        $form->handleRequest($request);

        if ($form->isValid()) {
              $em->flush();

      
        }
    }

    return $this->render('OfertaBundle:Default:updateOferta.html.twig', array(
          'formOferta' => $form->createView(),
          'areas' => $areas
          //'disciplinas' => $disciplinas
        ));
  }

  public function subirOfertaAction(Request $request){

    $oferta = new Oferta();

    $formOferta = $this->createFormBuilder($oferta)
                  ->add('nombre','text')
                  ->add('descripcion', 'textarea', array('label' => 'Descripcion', 'attr' => array('class' => 'descripcion')))
                  ->add('condiciones','textarea')
                  ->add('fechaInicio','datetime',array('widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => array('class' => 'datepicker')))
                  ->add('fechaFin','datetime',array('widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => array('class' => 'datepicker')))
                  ->add('contacto','email')
                  ->add('saveAndAdd','submit')
                  ->add('area', 'entity', array(
                    'class' => 'AreaBundle:Area',
                    'property' => 'nombre',
                    'multiple' => 'false'
                  ))
                  ->add('rama', 'entity', array(
                    'class' => 'RamaBundle:Rama',
                    'property' => 'nombre',
                    'multiple' => 'false'
                  ))
                  ->add('disciplina', 'entity', array(
                    'class' => 'DisciplinaBundle:Disciplina',
                    'property' => 'nombre',
                    'multiple' => 'false'
                  ))
                  ->addEventSubscriber(new AddRamaField($oferta->getArea()))
                  ->addEventSubscriber(new AddDisciplinaFieldSubscriber())
                  ->add('brochure', FileType::class, array('label' => 'Brochure (IMAGE file)'))
                  ->setAction($this->generateUrl('addOferta'))
                  ->getForm();

    /*
    if($formOferta->isSubmitted()){
      echo "es submit";
      dump($oferta->getArea());
      exit;
    }
    */

    /*

      if ($formOferta->isSubmitted() && $formOferta->isValid()) {
        echo "ha llegao";
        return $this->redirectToRoute('addOferta');
      }

    else{
      echo "no post";
    }
    */

        $formOferta->handleRequest($request);
        //$formOferta->submit($request->request->get($oferta->getArea()));
        dump($formOferta);


    if($formOferta->isValid()){

      $nextAction = $formOferta->get('saveAndAdd')->isClicked()
          ? 'mostrarOfertas'
          : 'addOferta';

        // $file stores the uploaded PDF file
        /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
        dump($formOferta);

        $file = $oferta->getBrochure();

        // Generate a unique name for the file before saving it
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        // Move the file to the directory where brochures are stored
        $file->move(
            $this->getParameter('brochures_directory'),
            $fileName
        );

        // Update the 'brochure' property to store the PDF file name
        // instead of its contents
        $oferta->setBrochure($fileName);


        $em = $this->getDoctrine()->getManager();
        $em->persist($oferta);
        $em->flush();

        $page=1;
        $cursorScroll=1;
        $router=$this->get('router');
        $comentario= new Comentario();
        $comentario->setContenido("holaaaa");
        $comentario->setAutor("holaaaa");
        $comentario->setFecha($oferta->getFechaInicio());
        $em->persist($comentario);
        $oferta->addComentario($comentario);

        $em = $this->getDoctrine()->getManager();
        $em->persist($oferta);
        $em->flush();

        return $this->redirectToRoute('mostrarOfertas', array('page' => 0,'cursorScroll' => 0));
    }
    else{
      //dump($oferta->getArea());
      //exit;
    }

    $areas = $this->getDoctrine()
          ->getRepository('AreaBundle:Area')
          ->findAll();

    //$disciplinas = $ramas->getDisciplinas();


    //return $this->redirect($this->generateUrl($nextAction));
    return $this->render('OfertaBundle:Default:addOferta.html.twig', array(
          'formOferta' => $formOferta->createView(),
          'areas' => $areas
          //'disciplinas' => $disciplinas
        ));


      echo "hola";
      dump("hola");
  }

  public function selectRamasAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $session = $request->getSession();
    $session->set('area_id', $request->request->get('area_id'));
    $session->remove('rama_id');
    $session->remove('disciplina_id');

    $area_id = $request->request->get('area_id');

    $area = $em->getRepository('AreaBundle:Area')->findById($area_id);

    $ramas = array();


    for ($i = 0 ; $i< count($area[0]->getRamas()) ; $i++)
            {
                    # get params & values
                    $ramas[]=$area[0]->getRamas()[$i]->getId();
                    $ramas[]=$area[0]->getRamas()[$i]->getNombre();
            }


    return new JsonResponse($ramas);
  }

  public function selectDisciplinasAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $disciplinas = array();
    $session = $request->getSession();

    if($request->request->get('disciplina_id')!=null){
       $session->set('disciplina_id', $request->request->get('disciplina_id'));
     }

    if($request->request->get('rama_id')!=null){

       $session->set('rama_id', $request->request->get('rama_id'));
       $session->remove('disciplina_id');
    }

    if($session->get('rama_id')!=null){
     
       
       $rama_id = $session->get('rama_id');

       $rama = $em->getRepository('RamaBundle:Rama')->findById($rama_id);



       for ($i = 0 ; $i< count($rama[0]->getDisciplinas()) ; $i++)
            {
                    # get params & values
                    $disciplinas[]=$rama[0]->getDisciplinas()[$i]->getId();
                    $disciplinas[]=$rama[0]->getDisciplinas()[$i]->getNombre();
            }
    }


      
      else{
        $disciplinas_aux = $em->getRepository('DisciplinaBundle:Disciplina')->findAll();



       for ($i = 0 ; $i< count($disciplinas_aux) ; $i++)
            {
                    # get params & values
                    $disciplinas[]=$disciplinas_aux[$i]->getId();
                    $disciplinas[]=$disciplinas_aux[$i]->getNombre();
            }

      }

      return new JsonResponse($disciplinas);
  }
  public function searchOfertaAction(Request $request){
    $session = $request->getSession();
    $searchterm = $request->query->get('term');
    $em = $this->getDoctrine()->getManager();
    $query = null;


     if($session->get('area_id')!=null && $session->get('rama_id')!=null && $session->get('disciplina_id')!=null) {
          $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE 
                              o.descripcion like :searchterm 
                              AND o.area = :id_area AND o.rama = :id_rama AND o.disciplina = :id_disciplina")
                              ->setParameter('searchterm', '%'.$searchterm.'%')
                              ->setParameter('id_area', $session->get('area_id'))
                              ->setParameter('id_rama', $session->get('rama_id'))
                              ->setParameter('id_disciplina', $session->get('disciplina_id'));
     }
     else if($session->get('area_id')!=null && $session->get('rama_id')!=null) {
          $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE 
                              o.descripcion like :searchterm 
                              AND o.area = :id_area AND o.rama = :id_rama")
                              ->setParameter('searchterm', '%'.$searchterm.'%')
                              ->setParameter('id_area', $session->get('area_id'))
                              ->setParameter('id_rama', $session->get('rama_id'));
     }

     else if($session->get('area_id')!=null) {
          $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE 
                              o.descripcion like :searchterm 
                              AND o.area = :id_area ")
                              ->setParameter('searchterm', '%'.$searchterm.'%')
                              ->setParameter('id_area', $session->get('area_id'));
     }

     else {
          $query = $em->createQuery("SELECT o FROM OfertaBundle:Oferta o WHERE 
                              o.descripcion like :searchterm ")
                              ->setParameter('searchterm', '%'.$searchterm.'%');
     }


    $results =  $query->getResult();

    for($i=0; $i< count($results); $i++){
      $new_row['title']= $results[$i]->getNombre();
      $new_row['image']= $results[$i]->getBrochure();
      $new_row['description'] = $results[$i]->getDescripcion();
      $new_row['description'] = str_replace($searchterm, "<strong>".$searchterm."</strong>", $new_row['description']);
      $new_row['id'] = $results[$i]->getId();
      //http://tfg.local/app_dev.php/showOferta/?id=
      //a$new_row['description']= url('blog/'.$post->slug);

        $row_set[] = $new_row; //build an array
    }

    $encoders = array(new XmlEncoder(), new JsonEncoder());
    $normalizers = array(new ObjectNormalizer());

    $serializer = new Serializer($normalizers, $encoders);


      return new JsonResponse($row_set);
    }



}
