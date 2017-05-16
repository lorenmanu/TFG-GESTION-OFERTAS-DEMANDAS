<?php

namespace OfertaBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Doctrine\ORM\EntityRepository;

class AddDisciplinaFieldSubscriber implements EventSubscriberInterface
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

    private function addDisciplinaForm($form, $cliente_id)
    {
        $formOptions = array(
            'placeholder' => 'Selecciona...',
            'class' => 'DisciplinaBundle:Disciplina',
            'property' => 'nombre',
            'attr' => array(
                'class' => 'conocimiento_selector',
            ),
/*
            'query_builder' => function (EntityRepository $repository) use ($cliente_id) {
                $qb = $repository->createQueryBuilder('')
                    ->innerJoin('m.cliente', 'c')
                    ->where('c.id = :cliente')
                    ->setParameter('cliente', $cliente_id)
                ;

                return $qb;
            }
            */

        );

        dump("hola");
        exit;



        $form->add('disciplina', 'entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();


        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::createPropertyAccessor();

        $disciplina = $accessor->getValue($data, 'rama');
        //dump($accessor);
        //exit;
        $disciplina_id = ($disciplina) ? $disciplina->getCliente()->getId() : null;

        //$this->addDisciplinaForm($form, $disciplina_id);
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        //$cliente_id = array_key_exists('area', $data) ? $data['cliente'] : null;
      }
   }
