<?php

namespace PalabrasClaveDemandaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
  /**
   * @Route("/")
   */
  public function indexAction()
  {
      return $this->render('PalabrasClaveDemandaBundle:Default:index.html.twig');
  }
  /*
    =====================================================================================

    Método eliminar palabrasClave "eliminarPalabrasClave":

    A partir de la id del Usuario logueado, la buscara en la base de datos y la eliminará.

    Pasos del método:
      i) Obtiene la id del usuario logueado
      ii) Busca las Palabras Clave en la base de datos y la elimina
      iiii) Dirige hacia la opcion "Mostrar Demandas" de la aplicacion
           Localizacion: src/DemandaBundle/Resources/views/Default/mostrarDemandas.html.twig


    =====================================================================================
  */
  public function eliminarPalabrasClaveDemandaAction()
  {
    $em = $this->getDoctrine()->getManager();
    $user=$this->container->get('security.context')->getToken()->getUser();

    $palabrasClaveDemandaUser=$em->getRepository('PalabrasClaveDemandaBundle:PalabrasClaveDemanda')->findBy( array('usuario' => $user->getId()));

    if($palabrasClaveDemandaUser!=null){
      $em->remove($palabrasClaveDemandaUser[0]);
      $em->flush();
    }

    return $this->redirectToRoute('mostrarDemandas');
  }
}
