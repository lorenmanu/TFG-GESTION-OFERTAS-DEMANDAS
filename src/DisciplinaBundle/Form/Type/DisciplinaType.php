<?php
# src/AppBundle/Form/Type/UserType.php

namespace DisciplinaBundle\Form\Type;
use DisciplinaBundle\Entity\Disciplina;
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

class DisciplinaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre','text')
        ->add('saveAndAdd','submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DisciplinaBundle\Entity\Disciplina',
        ));
    }

    public function getName()
    {
        return 'user';
    }

}
