<?php
# src/AppBundle/Form/Type/UserType.php

namespace OfertaBundle\Form\Type;

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
use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;

class OfertaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre','text')
        ->add('slug','text')
        ->add('descripcion', 'textarea', array('label' => 'Descripcion', 'attr' => array('class' => 'descripcion')))
        ->add('condiciones','textarea')
        ->add('fechaInicio','datetime',array('widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => array('class' => 'datepicker')))
        ->add('fechaFin','datetime',array('widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => array('class' => 'date')))
        ->add('contacto','email')
        ->add('palabrasClave','text')
        ->add('saveAndAdd','submit')
        ->add('area', Select2EntityType::class, [
                 'multiple' => false,
                 'remote_route' => 'addOferta',
                 'class' => 'AreaBundle:Area',
                 'primary_key' => 'id',
                 'minimum_input_length' => 2,
                 'page_limit' => 2,
                 'allow_clear' => true,
                 'delay' => 250,
                 'cache' => true,
                 'cache_timeout' => 60000, // if 'cache' is true
                 'language' => 'en',
                 'placeholder' => 'Select a country',
             ])
        ->addEventSubscriber(new AddStateFieldSubscriber())
        ->add('brochure', FileType::class, array('label' => 'Brochure (IMAGE file)'));
        // Añadimos un EventListener que actualizará el campo state
        // para que sus opciones correspondan
        // con el pais seleccionado por el usuario
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OfertaBundle\Entity\Oferta',
        ));
    }

    public function getName()
    {
        return 'user';
    }

}
