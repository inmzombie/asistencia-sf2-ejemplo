<?php

namespace Ipap\Ejemplo\AsistenciaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TelefonoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero', null, array(
                'label' => 'Número',
                )
            )
            ->add('tipo', null, array(
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ipap\Ejemplo\AsistenciaBundle\Entity\Telefono'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ipap_ejemplo_asistenciabundle_telefono';
    }
}
