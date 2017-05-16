<?php
namespace OfertaBundle\Type\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OfertaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
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
       ->addEventSubscriber(new AddConocimientoField());
       ->add('brochure', FileType::class, array('label' => 'Brochure (IMAGE file)'))
       ->setAction($this->generateUrl('addOferta'));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OfertaBundle\Entity\Oferta'
        ));
    }

}
