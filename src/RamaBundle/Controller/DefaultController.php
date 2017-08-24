<?php

namespace RamaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RamaBundle\Form\Type\RamaType;
use RamaBundle\Entity\Rama;
use Symfony\Component\HttpFoundation\JsonResponse;

  /*
    =====================================================================================

    Controlador de la clase Rama, para poder realizar las operaciones correspondientes en la
    aplicación.

    =====================================================================================
  */

class DefaultController extends Controller
{
  /*
    =====================================================================================

    Método añadir rama "addRama":

    A partir de un objeto de la clase "Rama", se creará un formulario con los campos
    correspondientes a dicho objeto para crealo.

    Pasos del método:
      i) Se crea el formulario con dicho objeto.
      ii) Se comprueba si se ha enviado el formulario y los campos se han rellenado correctamente.
      iii) En el caso de que se hayan rellenado correctamente:
        Se guardarán la rama y todas las disciplinas asociadas en la base de datos.
      iiii) En caso contrario:
        Se enviará el formulario para que se rellenen los campos( en el caso de que no se hayan rellenado
        adecuadamente, con los mensajes de error correspondientes.)


    =====================================================================================
  */

  public function addRamaAction(Request $request)
  {

    $form = $this->createFormBuilder($rama = new Rama())
    ->add('nombre','text')
    ->add('disciplinas', 'entity', array(
      'class' => 'DisciplinaBundle:Disciplina',
      'property' => 'nombre',
      'multiple' => 'true',
      'required' => false
      ))
    ->add('Añadir','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
    ->getForm();


    $form->handleRequest($request);


    if($form->isValid()){
      $nextAction = $form->get('Añadir')->isClicked()
      ? 'editMenu'
      : 'addRama';

      $em = $this->getDoctrine()->getManager();
      foreach ($rama->getDisciplinas() as $disciplina) {
        $disciplina->addRama($rama);
        $em->persist($disciplina);
      }

      $em->persist($rama);
      $em->flush();
      return $this->redirectToRoute('editarMenu');
    }

    $ramas = $this->getDoctrine()
    ->getRepository('DisciplinaBundle:Disciplina')
    ->findByNombre('ff');

        //$disciplinas = $ramas->getDisciplinas();


        //return $this->redirect($this->generateUrl($nextAction));
    return $this->render('RamaBundle:Default:addRama.html.twig', array(
      'form' => $form->createView()
              //'ramas' => $rama
              //'disciplinas' => $disciplinas
      ));

  }

  /*
    =====================================================================================

    Método editar rama "editarRama":

    A partir de un objeto de la clase "Rama", se creará un formulario con los campos
    correspondientes a dicho objeto para poder modificarlo.

    Pasos del método:
      i) Se crea el formulario con dicho objeto.
      ii) Se comprueba si se ha enviado el formulario y los campos se han rellenado correctamente.
      iii) En el caso de que se hayan rellenado correctamente:
        Se guardarán la rama modificada y todas las disciplinas asociadas en la base de datos.
      iiii) En caso contrario:
        Se enviará el formulario para que se rellenen los campos( en el caso de que no se hayan rellenado
        adecuadamente, con los mensajes de error correspondientes.)


    =====================================================================================
  */

  public function editarRamaAction(Request $request)
  {

    $session = $request->getSession();

    $em = $this->getDoctrine()->getManager();
    $rama=$em->getRepository('RamaBundle:Rama')->findById($session->get('rama_id'));

    if(count($rama)==0){

      $mensaje = "Seleccione primero la rama que desee editar.";

      $areas = $em->getRepository('AreaBundle:Area')->findAll();
      $tipos = $em->getRepository('TipoBundle:Tipo')->findAll();

      return $this->render('AreaBundle:Default:editMenu.html.twig', array(
        'mensaje' => $mensaje,'areas' => $areas, 'tipos' => $tipos
              //'ramas' => $rama
              //'disciplinas' => $disciplinas
        ));
    }

    $formRama = $this->createFormBuilder($rama[0])
    ->add('nombre','text')
    ->add('disciplinas', 'entity', array(
      'class' => 'DisciplinaBundle:Disciplina',
      'property' => 'nombre',
      'multiple' => 'true'
      ))
    ->add('Cambiar','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
    ->getForm();

    $formRama->handleRequest($request);


    if($formRama->isValid()){
      $nextAction = $formRama->get('Cambiar')->isClicked()
      ? 'editarMenu'
      : 'addRama';

      $em = $this->getDoctrine()->getManager();
      $em->persist($rama[0]);

      $em->flush();

      return $this->redirectToRoute('editarMenu');
    }


          //$disciplinas = $ramas->getDisciplinas();


          //return $this->redirect($this->generateUrl($nextAction));
    return $this->render('RamaBundle:Default:editarRama.html.twig', array(
      'form' => $formRama->createView()
                //'ramas' => $rama
                //'disciplinas' => $disciplinas
      ));

  }

  /*
    =====================================================================================

    Método seleccionar Rama "selectRama":

    A partir de la id del Area dada por el metodo get(Request), la buscara en la base de datos y guardara todas las ramas

    Pasos del método:
      i) Obtiene la id por el metodo get(Request)
      ii) Busca el area en la base de datos.
      iiii) Recorrer cada una de las ramas del area.
        iii.i) De cada rama, guardara su Id y su Nombre
      iv) Devolvera una respuesta Json con el resultado



    =====================================================================================
  */

  public function selectRamaAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $session = $request->getSession();

    if($request->request->get('area_id')!=null){
      $session->set('area_id', $request->request->get('area_id'));
    }

    $session->remove('rama_id');
    $session->remove('disciplina_id');

    $area_id = $session->get('area_id');

    $area = $em->getRepository('AreaBundle:Area')->findById($area_id);

    dump($em->getRepository('AreaBundle:Area')->findById($area_id));

    $ramas = array();

    if(count($area)>0){
      for ($i = 0 ; $i< count($area[0]->getRamas()) ; $i++){
        $ramas[]=$area[0]->getRamas()[$i]->getId();
        $ramas[]=$area[0]->getRamas()[$i]->getNombre();
      }
    }
    else{
      $rama[]=" ";
      $rama[]=" ";
    }


    return new JsonResponse($ramas);
  }

  /*
    =====================================================================================

    Método eliminar Rama "eliminarRama":

    A partir de la id de la Rama dada por la sesion, la buscara en la base de datos y la eliminara

    Pasos del método:
      i) Obtiene la id en la sesion
      ii) Busca la rama en la base de datos.
      iiii) Elimina la rama
      iv) Obtiene todas las ramas y tipos de la base de datos
      v)  Dirige hacia la opcion "editarMenu" de la aplicacion
         Localizacion: src/RamaBundle/Resources/views/Default/editMenu.html.twig



    =====================================================================================
  */


  public function deleteRamaAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $session = $request->getSession();
    $rama=$em->getRepository('RamaBundle:Rama')->findById($session->get('rama_id'));
    $mensaje = null;

    if(count($rama)==0){

      $mensaje = "Seleccione primero la rama que desee eliminar.";
    }

    else {
      $mensaje = "La rama se ha eliminado con éxito.";

      foreach ($rama[0]->getDisciplinas() as $disciplina) {
        $disciplina->removeRama($rama[0]);
        $em->persist($disciplina);
      }

      $em->remove($rama[0]);
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
