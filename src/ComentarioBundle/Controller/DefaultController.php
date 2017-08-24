<?php

namespace ComentarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

  /*
    =====================================================================================

    Método eliminarComentario "eliminarComentario":

    A partir de la id del comentario dada por el método "get" de Request, buscará el comentario en la
    base de datos y lo eliminará.

    Pasos del método:
      i) Coge la id del comentario pasado por get(Request).
      ii) Busca el comentario en la base de datos a partir de la ID.
      iii) Elimina el comentario de la base de datos.
      iii) Devuelve la plantilla que imprimirara la oferta o demanda con el comentario eliminado.
           Localizacion: Si el comentario es de una oferta --> src/OfertaBundle/Resources/views/Default/oferta.html.twig
           Localizacion: Si el comentario es de una demanda --> src/DemandaBundle/Resources/views/Default/demanda.html.twig

    =====================================================================================
  */

    public function eliminarComentarioAction(Request $request){
        $idComentario=$request->query->get('idComentario');
        $tipoItem=$request->query->get('tipoItem');
        $idItem=$request->query->get('idItem');
        $em = $this->getDoctrine()->getManager();

        $comentario = $this->getDoctrine()
        ->getRepository('ComentarioBundle:Comentario')
        ->find($idComentario);

        if (!$comentario) {
          throw $this->createNotFoundException(
            'No oferta found for id '.$idComentario
            );
        }

        $em->remove($comentario);
        $em->flush();

        if($tipoItem=="oferta"){
          $oferta = $this->getDoctrine()->getRepository('OfertaBundle:Oferta')->find($idItem);

          if (!$oferta) {
            throw $this->createNotFoundException(
            'No oferta found for id '.$idOferta
            );


          }

          return $this->redirectToRoute('mostrarOferta', array('idOferta' => $oferta->getId()));
        }

          $demanda = $this->getDoctrine()->getRepository('DemandaBundle:Demanda')->find($idItem);

          if (!$demanda) {
            throw $this->createNotFoundException(
            'No oferta found for id '.$idOferta
            );


          }

          return $this->redirectToRoute('mostrarDemanda', array('idDemanda' => $demanda->getId()));


      }

}
