<?php
  namespace DisciplinaBundle\Controller;

  use DisciplinaBundle\Entity\Disciplina;
  use Symfony\Component\Form\FormEvent;
  use Symfony\Component\Form\FormEvents;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\HttpFoundation\JsonResponse;

  /*
    =====================================================================================

    Controlador de la clase Disciplina, para poder realizar las operaciones correspondientes en la
    aplicación.

    =====================================================================================
  */

    class DefaultController extends Controller
    {

  /*
    =====================================================================================

    Método añadir disciplina "addDisciplina":

    A partir de un objeto de la clase "Disciplina", se creará un formulario con los campos
    correspondientes a dicho objeto para crealo.

    Pasos del método:
      i) Se crea el formulario con dicho objeto.
      ii) Se comprueba si se ha enviado el formulario y los campos se han rellenado correctamente.
      iii) En el caso de que se hayan rellenado correctamente:
        Se guardarán la disciplina.
      iiii) En caso contrario:
        Se enviará el formulario para que se rellenen los campos( en el caso de que no se hayan rellenado
        adecuadamente, con los mensajes de error correspondientes.)


    =====================================================================================
  */
    public function addDisciplinaAction(Request $request)
    {

      $formDisciplina = $this->createFormBuilder($disciplina=new Disciplina())
      ->add('nombre','text')
      ->add('Añadir','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
      ->getForm();

      $formDisciplina->handleRequest($request);


      if($formDisciplina->isValid()){
        $nextAction = $formDisciplina->get('Añadir')->isClicked()
        ? 'editMenu'
        : 'addDisciplina';

        $em = $this->getDoctrine()->getManager();
        $em->persist($disciplina);

        $em->flush();

        return $this->redirectToRoute('editarMenu');
      }

      $ramas = $this->getDoctrine()
      ->getRepository('DisciplinaBundle:Disciplina')
      ->findByNombre('ff');

          //$disciplinas = $ramas->getDisciplinas();


          //return $this->redirect($this->generateUrl($nextAction));
      return $this->render('DisciplinaBundle:Default:addDisciplina.html.twig', array(
        'form' => $formDisciplina->createView()
                //'ramas' => $rama
                //'disciplinas' => $disciplinas
        ));

    }

  /*
    =====================================================================================

    Método editar disciplina "editarDisciplina":

    A partir de un objeto de la clase "Disciplina", se creará un formulario con los campos
    correspondientes a dicho objeto para poder modificarlo.

    Pasos del método:
      i) Se crea el formulario con dicho objeto.
      ii) Se comprueba si se ha enviado el formulario y los campos se han rellenado correctamente.
      iii) En el caso de que se hayan rellenado correctamente:
        Se guardarán la disciplina modificada.
      iiii) En caso contrario:
        Se enviará el formulario para que se rellenen los campos( en el caso de que no se hayan rellenado
        adecuadamente, con los mensajes de error correspondientes.)


    =====================================================================================
  */
    public function editarDisciplinaAction(Request $request)
    {

      $session = $request->getSession();

      $em = $this->getDoctrine()->getManager();
      $disciplina=$em->getRepository('DisciplinaBundle:Disciplina')->findById($session->get('disciplina_id'));

      if(count($disciplina)==0){

        $mensaje = "Seleccione primero la disciplina que desee editar.";

      $areas = $em->getRepository('AreaBundle:Area')->findAll();
      $tipos = $em->getRepository('TipoBundle:Tipo')->findAll();

      return $this->render('AreaBundle:Default:editMenu.html.twig', array(
        'mensaje' => $mensaje,'areas' => $areas, 'tipos' => $tipos
              //'ramas' => $rama
              //'disciplinas' => $disciplinas
        ));
      }

      $formDisciplina = $this->createFormBuilder($rama[0])
      ->add('nombre','text')
      ->add('Cambiar','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
      ->getForm();

      $formDisciplina->handleRequest($request);


      if($formDisciplina->isValid()){
        $nextAction = $formRama->get('Cambiar')->isClicked()
        ? 'editMenu'
        : 'addDisciplina';

        $em = $this->getDoctrine()->getManager();
        $em->persist($rama[0]);

        $em->flush();

        return $this->redirectToRoute('editarMenu');
      }


          //$disciplinas = $ramas->getDisciplinas();


          //return $this->redirect($this->generateUrl($nextAction));
      return $this->render('DisciplinaBundle:Default:editarDisciplina.html.twig', array(
        'form' => $formDisciplina->createView()
                //'ramas' => $rama
                //'disciplinas' => $disciplinas
        ));

    }
    /*
      =====================================================================================

      Método eliminar disciplina "deleteDisciplina":

      A partir de la id de la Disciplina danda por la sesion, la buscara en la base de datos y la eliminará.

      Pasos del método:
        i) Obtiene la id de la sesion
        ii) Busca la disciplina en la base de datos y la elimina
        iiii) Obtiene todas las areas y los tipos de la base de datos y dirige hacia la opcion editarMenu.
             Localizacion: src/AreaBundle/Resources/views/Default/editMenu.html.twig


      =====================================================================================
    */
  public function deleteDisciplinaAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $session = $request->getSession();
    $disciplina=$em->getRepository('DisciplinaBundle:Disciplina')->findById($session->get('disciplina_id'));
    $mensaje = null;

    if(count($disciplina)==0){

      $mensaje = "Seleccione primero la disciplina que desee eliminar.";
    }

    else {
      $mensaje = "La disciplina se ha eliminado con éxito.";

      foreach ($disciplina[0]->getRamas() as $rama) {
        $rama->removeDisciplina($disciplina[0]);
        $em->persist($rama);
      }

      $em->remove($disciplina[0]);
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

    Método seleccionar Disciplina "selectDisciplina":

    A partir de la id de la Rama dada por el metodo get(Request), la buscara en la base de datos y guardara todas las disciplinas

    Pasos del método:
      i) Obtiene la id por el metodo get(Request)
      ii) Busca la rama en la base de datos.
      iiii) Recorrer cada una de las disciplinas de la rama.
        iii.i) De cada disciplina, guardara su Id y su Nombre
      iv) Devolvera una respuesta Json con el resultado



    =====================================================================================
  */

  public function selectDisciplinaAction(Request $request)
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



     if(count($rama[0]->getDisciplinas())>0){
       for ($i = 0 ; $i< count($rama[0]->getDisciplinas()) ; $i++){
         $disciplinas[]=$rama[0]->getDisciplinas()[$i]->getId();
         $disciplinas[]=$rama[0]->getDisciplinas()[$i]->getNombre();
       }
    }
    else{
      $disciplinas[]=" ";
      $disciplinas[]=" ";
    }
  }




  /*
  else{
    $disciplinas_aux = $em->getRepository('DisciplinaBundle:Disciplina')->findAll();



    for ($i = 0 ; $i< count($disciplinas_aux) ; $i++)
    {
                    # get params & values
      $disciplinas[]=$disciplinas_aux[$i]->getId();
      $disciplinas[]=$disciplinas_aux[$i]->getNombre();
    }

  }
  */

  return new JsonResponse($disciplinas);
}

  }
