<?php

namespace Ipap\Ejemplo\AsistenciaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Form
 *
 * @author Nombre Apellido <name@gmail.com>
 */
class AlumnoType extends AbstractType
{

    /**
     * Construye form
     *
     * @param \Symfony\Component\Form\FormBuilderInterface $builder Builder del Form
     * @param array                                        $options Options
     *
     * @return form
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('documento')
            ->add('tipoDocumento')
            ->add('codigo', null, array(
                'label' => 'Código',
                )
            )
            ->add('telefonos', 'collection', array(
                'label'        => 'Teléfonos',
                'type'         => new TelefonoType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
                )
            )
            ->add(
                'save', 'submit', array(
                'translation_domain' => 'MWSimpleCrudGeneratorBundle',
                'label'              => 'views.new.save',
                'attr'               => array('class' => 'btn btn-success')
                )
            )
            ->add(
                'saveAndAdd', 'submit', array(
                'translation_domain' => 'MWSimpleCrudGeneratorBundle',
                'label'              => 'views.new.saveAndAdd',
                'attr'               => array('class' => 'btn btn-primary')
                )
            );
    }

    /**
     * Set Defaults options
     *
     * @param \Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver Resolver interface
     *
     * @return array
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array('data_class' => 'Ipap\Ejemplo\AsistenciaBundle\Entity\Alumno' )
        );
    }

    /**
     * Nombre
     *
     * @return string
     */
    public function getName()
    {
        return 'ipap_ejemplo_asistenciabundle_alumno';
    }
}
