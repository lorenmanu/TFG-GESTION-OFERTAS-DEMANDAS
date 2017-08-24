<?php

namespace AreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AreaBundle\Form\Type\AreaType;
use AreaBundle\Entity\Area;
use RamaBundle\Entity\Rama;
use DisciplinaBundle\Entity\Disciplina;

  /*
    =====================================================================================

    Controlador de la clase Area, para poder realizar las operaciones correspondientes en la
    aplicación.

    =====================================================================================
  */

class DefaultController extends Controller
{

  /*
    =====================================================================================

    Método añadir área "addArea":

    A partir de un objeto de la clase "Area", se creará un formulario con los campos
    correspondientes a dicho objeto para crealo.

    Pasos del método:
      i) Se crea el formulario con dicho objeto.
      ii) Se comprueba si se ha enviado el formulario y los campos se han rellenado correctamente.
      iii) En el caso de que se hayan rellenado correctamente:
        Se guardarán el área y todas las ramas asociadas en la base de datos.
      iiii) En caso contrario:
        Se enviará el formulario para que se rellenen los campos( en el caso de que no se hayan rellenado
        adecuadamente, con los mensajes de error correspondientes.)


    =====================================================================================
  */

  public function addAreaAction(Request $request)
  {   $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder();
    $query = $qb->select('u')
    ->from('RamaBundle:Rama', 'u')
    ->orderBy('u.nombre', 'ASC');
    $formArea = $this->createFormBuilder($area=new Area())
    ->add('nombre','text')
    ->add('ramas', 'entity', array(
      'class' => 'RamaBundle:Rama',
      'property' => 'nombre',
      'multiple' => 'true',
      'query_builder' => $query
      ))
    ->add('Añadir','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
    ->getForm();

    $formArea->handleRequest($request);


    if($formArea->isValid()){

      $em = $this->getDoctrine()->getManager();
      foreach ($area->getRamas() as $rama) {
        $rama->addArea($area);
        $em->persist($rama);
      }
      $em->persist($area);

      $em->flush();

      return $this->redirectToRoute('editarMenu');
    }
        //$disciplinas = $ramas->getDisciplinas();


        //return $this->redirect($this->generateUrl($nextAction));
    return $this->render('AreaBundle:Default:addArea.html.twig', array(
      'form' => $formArea->createView()
              //'ramas' => $rama
              //'disciplinas' => $disciplinas
      ));

  }

  /*
    =====================================================================================

    Método eliminar área "deleteArea":

    A partir de la id del Area dada por la sesion, la buscara en la base de datos y la eliminará.

    Pasos del método:
      i) Obtiene la id en la sesion
      ii) Busca el area en la base de datos y la elimina
      iiii) Obtiene todas las areas y los tipos de la base de datos y dirige hacia la opcion editarMenu.
           Localizacion: src/AreaBundle/Resources/views/Default/editMenu.html.twig


    =====================================================================================
  */

  public function deleteAreaAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $session = $request->getSession();
    $area=$em->getRepository('AreaBundle:Area')->findById($session->get('area_id'));
    $mensaje = null;

    if(count($area)==0){

      $mensaje = "Seleccione primero el area que desee eliminar.";
    }

    else {
      $mensaje = "El area se ha eliminado con éxito.";

      foreach ($area[0]->getRamas() as $rama) {
        $rama->removeArea($area[0]);
        $em->persist($rama);
      }

      $em->remove($area[0]);
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

  /*
    =====================================================================================

    Método editar Menu "editMenu":

    Obtiene todas las areas y tipos de la base de datos y dirige hacia la opcion "Editar Menu" de la aplicacion

    Pasos del método:
      i) Elimina todas las id de area, rama, disciplina y tipo guardadas en la sesion.
      ii) Dirige hacia la opcion "Editar Menu"
        Localizacion: src/AreaBundle/Resources/views/Default/editMenu.html.twig


    =====================================================================================
  */

  public function editarMenuAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $session = $request->getSession();
    $areas = $em->getRepository('AreaBundle:Area')->findAll();
    $tipos = $em->getRepository('TipoBundle:Tipo')->findAll();
    ;
    $session->remove('area_id');
    $session->remove('rama_id');
    $session->remove('disciplina_id');
    $session->remove('tipo_id');

    return $this->render('AreaBundle:Default:editMenu.html.twig', array(
      'areas' => $areas, 'tipos' => $tipos
      ));
  }

  /*
    =====================================================================================

    Método editar area "editarArea":

    A partir de un objeto de la clase "Area", se creará un formulario con los campos
    correspondientes a dicho objeto para poder modificarlo.

    Pasos del método:
      i) Se crea el formulario con dicho objeto.
      ii) Se comprueba si se ha enviado el formulario y los campos se han rellenado correctamente.
      iii) En el caso de que se hayan rellenado correctamente:
        Se guardarán el área modificada y todas las ramas asociadas en la base de datos.
      iiii) En caso contrario:
        Se enviará el formulario para que se rellenen los campos( en el caso de que no se hayan rellenado
        adecuadamente, con los mensajes de error correspondientes.)


    =====================================================================================
  */

  public function editarAreaAction(Request $request){

    $session = $request->getSession();

    $em = $this->getDoctrine()->getManager();
    $area=$em->getRepository('AreaBundle:Area')->findById($session->get('area_id'));

    if(count($area)==0){

      $mensaje = "Seleccione primero el area que desee editar.";

      $areas = $em->getRepository('AreaBundle:Area')->findAll();
      $tipos = $em->getRepository('TipoBundle:Tipo')->findAll();

      return $this->render('AreaBundle:Default:editMenu.html.twig', array(
        'mensaje' => $mensaje,'areas' => $areas, 'tipos' => $tipos
              //'ramas' => $rama
              //'disciplinas' => $disciplinas
        ));
    }

    $formArea = $this->createFormBuilder($area[0])
    ->add('nombre','text')
    ->add('ramas', 'entity', array(
      'class' => 'RamaBundle:Rama',
      'property' => 'nombre',
      'multiple' => 'true'
      ))
    ->add('Cambiar','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
    ->getForm();

    $formArea->handleRequest($request);


    if($formArea->isValid()){
      $nextAction = $formArea->get('Cambiar')->isClicked()
      ? 'editarMenu'
      : 'addArea';

      $em = $this->getDoctrine()->getManager();
      $em->persist($area[0]);

      $em->flush();

      return $this->redirectToRoute('editarMenu');
    }


          //$disciplinas = $ramas->getDisciplinas();


          //return $this->redirect($this->generateUrl($nextAction));
    return $this->render('AreaBundle:Default:editarArea.html.twig', array(
      'form' => $formArea->createView()
                //'ramas' => $rama
                //'disciplinas' => $disciplinas
      ));

  }



}
