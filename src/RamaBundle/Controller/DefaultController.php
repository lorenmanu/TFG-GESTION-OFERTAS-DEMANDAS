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

        $formRama = $this->createForm($rama = new RamaType(),$rama = new Rama());

        $formRama->handleRequest($request);


        if($formRama->isValid()){
          $nextAction = $formRama->get('saveAndAdd')->isClicked()
              ? 'mostrarRamas'
              : 'addRama';

            $em = $this->getDoctrine()->getManager();
            //$em->persist($disciplina);
            $em->persist($rama);

            $em->flush();
            $em->persist($rama);

            $em->flush();
            //dump($rama);
            $ramas = $em->getRepository('RamaBundle:Rama')->findById($rama->getId());
            $rama->addDisciplina($rama->getDisciplinas()[0]);
            //dump($ramas[0]);
            //exit;

            return $this->redirectToRoute('mostrarRamas');
        }

        $ramas = $this->getDoctrine()
              ->getRepository('DisciplinaBundle:Disciplina')
              ->findByNombre('ff');

        //$disciplinas = $ramas->getDisciplinas();


        //return $this->redirect($this->generateUrl($nextAction));
        return $this->render('RamaBundle:Default:addRama.html.twig', array(
              'formRama' => $formRama->createView()
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
