<?php
# src/AreaBundle/Form/Type/AreaType.php

namespace AreaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OfertaBundle\Form\Listener\AddStateFieldSubscriber;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OfertaBundle\Entity\Oferta;
use VisitasOfertaBundle\Entity\VisitasOferta;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Tools\Pagination\Paginator;
use ComentarioOfertaBundle\Entity\ComentarioOferta;
//use ConocimientoBundle\Entity\Conocimiento;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
//use ConocimientoBundle\Form\Type\ConocimientoType;

class AreaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre','text')
        ->add('ramas', 'entity', array(
            'class' => 'RamaBundle:Rama',
            'property' => 'nombre',
            'multiple' => 'true',
            'expanded' => 'true'
        ))
        ->add('saveAndAdd','submit');

        // Añadimos un EventListener que actualizará el campo state
        // para que sus opciones correspondan
        // con el pais seleccionado por el usuario
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AreaBundle\Entity\Area',
        ));
    }

    public function getName()
    {
        return 'user';
    }

}
