<?php

namespace AppBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Doctrine\ORM\EntityRepository;

class AddConocimeintoField implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit'
        );
    }

    public static function getPrimerNivel(){
      
    }

    private function addMascotaForm($form, $cliente_id)
    {
        $formOptions = array(
            'placeholder' => 'Selecciona...',
            'class' => 'ConocimientoBundle:Conocimiento',
            'property' => 'primerCampo',
            'attr' => array(
                'class' => 'conocimiento_selector',
            ),
            'query_builder' => function (EntityRepository $repository) use ($cliente_id) {
                $qb = $repository->createQueryBuilder('m')
                    ->innerJoin('m.cliente', 'c')
                    ->where('c.id = :cliente')
                    ->setParameter('cliente', $cliente_id)
                ;

                return $qb;
            }
        );

        $form->add(‘mascota’, 'genemu_jqueryselect2_entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::createPropertyAccessor();

        $mascota = $accessor->getValue($data, 'mascota');
        $cliente_id = ($mascota) ? $mascota->getCliente()->getId() : null;

        $this->addMascotaForm($form, $cliente_id);
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        $cliente_id = array_key_exists('cliente', $data) ? $data['cliente'] : null;
