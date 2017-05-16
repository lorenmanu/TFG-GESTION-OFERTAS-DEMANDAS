<?php

namespace OfertaBundle\Form\Listener;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use OfertaBundle\Controller\DefaultController;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AddStateFieldSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SUBMIT => 'preSubmit',
        );
    }

    /**
     * Cuando el usuario llene los datos del formulario y haga el envío del mismo,
     * este método será ejecutado.
     */
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
        //data es un arreglo con los valores establecidos por el usuario en el form.

        //como $data contiene el pais seleccionado por el usuario al enviar el formulario,
        // usamos el valor de la posicion $data['country'] para filtrar el sql de los estados
        if($data['area']){
          dump($form);
          $this->addField($event->getForm(), $data);
          echo "hola";
        }
        else{
          echo "nada..";
        }

    }

    protected function addField(Form $form,$area)
    {
      // actualizamos el campo state, pasandole el country a la opción
      // query_builder, para que el dql tome en cuenta el pais
      // y filtre la consulta por su valor.
      echo "hola addfield";
      /*
      $form->add('rama', 'entity', array(
        'class' => 'OfertaBundle:Oferta',
        'query_builder' => function (EntityRepository $repo) use ($area) {
            $consulta = $repo->createQueryBuilder('rama')
             ->select(array('r')) // string 'u' is converted to array internally
            //->from('RamaBundle:Rama', 'r')
            ->innerJoin('r', 'a', 'WITH', 'a.id = :area')
            ->setParameter('area', $area);


            $ramas = null;
            dump($consulta);
            $query = $repo->createQueryBuilder('area')
                      ->where('area.id=:area')
                      ->setParameter('area', $area);
            dump($query);
            return $query;
        },
        'expanded'     => true,
        'required' => false
    ));
*/
    }

}
