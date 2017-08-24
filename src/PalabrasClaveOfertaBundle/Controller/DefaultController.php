<?php

namespace PalabrasClaveOfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('PalabrasClaveOfertaBundle:Default:index.html.twig');
    }
    /*
      =====================================================================================

      Método eliminar palabrasClave "eliminarPalabrasClave":

      A partir de la id del Usuario logueado, la buscara en la base de datos y la eliminará.

      Pasos del método:
        i) Obtiene la id del usuario logueado
        ii) Busca las Palabras Clave en la base de datos y la elimina
        iiii) Dirige hacia la opcion "Mostrar Ofertas" de la aplicacion
             Localizacion: src/OfertaBundle/Resources/views/Default/mostrarOfertas.html.twig


      =====================================================================================
    */
    public function eliminarPalabrasClaveOfertaAction()
    {
      $em = $this->getDoctrine()->getManager();
      $user=$this->container->get('security.context')->getToken()->getUser();

      $palabrasClaveOfertaUser=$em->getRepository('PalabrasClaveOfertaBundle:PalabrasClaveOferta')->findBy( array('usuario' => $user->getId()));

      if($palabrasClaveOfertaUser!=null){
        $em->remove($palabrasClaveOfertaUser[0]);
        $em->flush();
      }

      return $this->redirectToRoute('mostrarOfertas');
    }
}
