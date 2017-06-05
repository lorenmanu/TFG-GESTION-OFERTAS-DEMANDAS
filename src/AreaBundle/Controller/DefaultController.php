<?php

namespace AreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AreaBundle\Form\Type\AreaType;
use AreaBundle\Entity\Area;
use RamaBundle\Entity\Rama;

class DefaultController extends Controller
{
  public function addAreaAction(Request $request)
  {
      $formArea = $this->createFormBuilder($area=new Area())
                            ->add('nombre','text')
                            ->add('ramas', 'entity', array(
                                  'class' => 'RamaBundle:Rama',
                                  'property' => 'nombre',
                                  'multiple' => 'true', 
                                  'expanded' => 'true'
                            ))
                            ->add('saveAndAdd','submit')
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

      public function editarMenuAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $areas = $em->getRepository('AreaBundle:Area')->findAll();
        return $this->render('AreaBundle:Default:editMenu.html.twig', array(
              'areas' => $areas
              //'ramas' => $rama
              //'disciplinas' => $disciplinas
            ));
      }

      public function editarAreaAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request');
        $session = $request->getSession();
        $form = null;
        $plantilla = null;

        if($session->get('disciplina_id')!=null){
          $disciplina = $em->getRepository('DisciplinaBundle:Disciplina')->findById($session->get('disciplina_id'));
          $form = $this->createFormBuilder($disciplina[0])
                            ->add('nombre','text')
                  ->getForm();
          $plantilla = 'DisciplinaBundle:Default:updateDisciplina.html.twig';
          $em->persist($disciplina[0]);
          }
          else if($session->get('rama_id')!=null){
             $rama = $em->getRepository('RamaBundle:Rama')->findById($session->get('rama_id'));
              $form = $this->createFormBuilder($rama[0])
                            ->add('nombre','text')
                            ->add('disciplinas', 'entity', array(
                                  'class' => 'DisciplinaBundle:Disciplina',
                                  'property' => 'nombre',
                                  'multiple' => 'true', 
                                  'expanded' => 'true'
                            ))
                            ->getForm();  
             $plantilla = 'RamaBundle:Default:updateRama.html.twig';   
             $em->persist($rama[0]); 
          }
          else if($session->get('area_id')!=null){
             $area = $em->getRepository('AreaBundle:Area')->findById($session->get('area_id'));
              $form = $this->createFormBuilder($area[0])
                            ->add('nombre','text')
                            ->add('ramas', 'entity', array(
                                  'class' => 'RamaBundle:Rama',
                                  'property' => 'nombre',
                                  'multiple' => 'true', 
                                  'expanded' => 'true'
                            ))
                            ->getForm();  
              $plantilla = 'AreaBundle:Default:updateArea.html.twig';  
              $em->persist($area[0]);  
          }
        

     if ($request->getMethod() == 'GET') {
             if ($form->isValid()) {
              return $this->redirect($this->generateUrl('editarMenu'));
            }
      }

    if ($request->getMethod() == 'POST') {
        $form->bind($request);

        if ($form->isValid()) {
              $em->flush();

            return $this->redirect($this->generateUrl('editarMenu'));
        }
    }
  
        return $this->render($plantilla, array(
              'form' => $form->createView()
              //'ramas' => $rama
              //'disciplinas' => $disciplinas
            ));
      
      }


}
