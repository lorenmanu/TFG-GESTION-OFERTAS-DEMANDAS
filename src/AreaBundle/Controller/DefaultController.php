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

        $formArea = $this->createForm(new AreaType(),$area=new Area());

        $formArea->handleRequest($request);


        if($formArea->isValid()){
          $nextAction = $formArea->get('saveAndAdd')->isClicked()
              ? 'mostrarAreas'
              : 'addArea';

            $em = $this->getDoctrine()->getManager();
            //$em->persist($disciplina);
            //$rama->addDisciplina($rama->getDisciplinas()[0]);
            $em->persist($area);

            $em->flush();
            $em->persist($area);

            $em->flush();
            //dump($area);
            //$ramas = $em->getRepository('AreaBundle:Area')->findAll('9');
            //dump($ramas[3]);
            //exit;

            return $this->redirectToRoute('mostrarAreas');
        }
        //$disciplinas = $ramas->getDisciplinas();


        //return $this->redirect($this->generateUrl($nextAction));
        return $this->render('AreaBundle:Default:addArea.html.twig', array(
              'formArea' => $formArea->createView()
              //'ramas' => $rama
              //'disciplinas' => $disciplinas
            ));

      }
      public function mostrarAreasAction(Request $request)
      {
        $repository = $this->getDoctrine()->getRepository('AreaBundle:Area');
        $areas = $repository->findAll(); // Limit;
        dump(count($areas));
        $em = $this->getDoctrine();
        $area = $em->getRepository('AreaBundle:Area')->findAll('1');
        //dump($areas[0]->getRamas()[0]);
        //exit;
       return $this->render('AreaBundle:Default:index.html.twig', array(
             'areas' => $areas
             //'ramas' => $rama
             //'disciplinas' => $disciplinas
           ));

      }
}
