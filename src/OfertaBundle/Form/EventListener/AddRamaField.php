<?php

namespace OfertaBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Doctrine\ORM\EntityRepository;
use AreaBundle\Entity\Area;

class AddRamaField implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit'
        );
    }

    private function addRamaForm($event, $cliente_id)
    {

        $formOptions = array(
            'placeholder' => 'Selecciona...',
            'class' => 'RamaBundle:Rama',
            'property' => 'nombre',
            'attr' => array(
                'class' => 'conocimiento_selector',
            ),

            'query_builder' => function (EntityRepository $repository) use ($cliente_id) {
                $qb = $repository->createQueryBuilder('area')->orderBy('area.id', 'ASC');
;

                dump($qb);
                exit;
                return $qb;
            }



        );

        //dump($event->getForm()->getData());
        //exit;


        $event->getForm()->add('rama', 'entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {   /*
        $data = $event->getData();
        $form = $event->getForm();

        //dump($data);
        //exit;

        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::createPropertyAccessor();

        //$rama = $accessor->getValue($data, 'area');
        //dump("hola 1");
        //exit;
        $rama_id = ($rama) ? $rama->getCliente()->getId() : null;
        */

    }

    public function preSubmit(FormEvent $event)
    {
      /*
      $data = $event->getData();
      $form = $event->getForm();

      //dump("hola 2");
      //exit;

      if (null === $data) {
          return;
      }

      $accessor = PropertyAccess::createPropertyAccessor();

      //$rama = $accessor->getValue($data, 'area');
      //dump($rama);
      //exit;
      $rama_id = ($rama) ? $rama->getCliente()->getId() : null;

        $data = $event->getData();
        $form = $event->getForm();
        $rama_id=1;
        //dump(1);
        //exit;
        //$cliente_id = array_key_exists('cliente', $data) ? $data['cliente'] : null;
        $this->addRamaForm($event, $rama_id);
      }
      */
    }  
   }
