<?php

namespace RamaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RamaBundle\Form\Type\RamaType;
use RamaBundle\Entity\Rama;

class DefaultController extends Controller
{
  public function addRamaAction(Request $request)
  {

        $form = $this->createForm($rama = new RamaType(),$rama = new Rama());

        $form->handleRequest($request);


        if($form->isValid()){
          $nextAction = $form->get('saveAndAdd')->isClicked()
              ? 'mostrarRamas'
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
      public function mostrarRamasAction(Request $request)
      {
        $repository = $this->getDoctrine()->getManager()->getRepository('RamaBundle:Rama')->findAll();
        //dump($disciplinas);
        //exit;
       return $this->render('RamaBundle:Default:index.html.twig', array(
             'ramas' => $repository
             //'ramas' => $rama
             //'disciplinas' => $disciplinas
           ));

      }
}
