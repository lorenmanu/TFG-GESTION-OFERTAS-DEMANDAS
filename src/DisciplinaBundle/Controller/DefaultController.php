<?php

namespace DisciplinaBundle\Controller;

use DisciplinaBundle\Form\Type\DisciplinaType;
use DisciplinaBundle\Entity\Disciplina;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function addDisciplinaAction(Request $request)
    {

          $formDisciplina = $this->createForm(new DisciplinaType(),$disciplina = new Disciplina());

          $formDisciplina->handleRequest($request);


          if($formDisciplina->isValid()){
            $nextAction = $formDisciplina->get('saveAndAdd')->isClicked()
                ? 'mostrarDisciplinas'
                : 'addDisciplina';

              $em = $this->getDoctrine()->getManager();
              $em->persist($disciplina);

              $em->flush();

              return $this->redirectToRoute('mostrarDisciplinas');
          }

          $ramas = $this->getDoctrine()
                ->getRepository('DisciplinaBundle:Disciplina')
                ->findByNombre('ff');

          //$disciplinas = $ramas->getDisciplinas();


          //return $this->redirect($this->generateUrl($nextAction));
          return $this->render('DisciplinaBundle:Default:addDisciplina.html.twig', array(
                'formDisciplina' => $formDisciplina->createView()
                //'ramas' => $rama
                //'disciplinas' => $disciplinas
              ));

        }
        public function mostrarDisciplinasAction(Request $request)
        {
          $repository = $this->getDoctrine()->getRepository('DisciplinaBundle:Disciplina');
          $disciplinas = $repository->findAll(); // Limit;
         return $this->render('DisciplinaBundle:Default:index.html.twig', array(
               'disciplinas' => $disciplinas
               //'ramas' => $rama
               //'disciplinas' => $disciplinas
             ));

        }
}
