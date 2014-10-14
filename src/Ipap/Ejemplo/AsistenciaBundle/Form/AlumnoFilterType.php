<?php

namespace Ipap\Ejemplo\AsistenciaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

/**
 * Filtro
 * 
 * @author Nombre Apellido <name@gmail.com>
 */
class AlumnoFilterType extends AbstractType
{
    /**
     * Form
     *
     * @param \Symfony\Component\Form\FormBuilderInterface $builder Builder
     * @param array                                        $options Options
     *
     * @return Form
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'filter_text')
            ->add('apellido', 'filter_text')
            ->add('documento', 'filter_text')
            ->add('codigo', 'filter_text', array(
                'label' => 'Código',
                )
            );
        $listener = function(FormEvent $event)
        {
            // Is data empty?
            foreach ($event->getData() as $data) {
                if ( is_array($data)) {
                    foreach ($data as $subData) {
                        if (!empty($subData)) {
                            return;
                        }    
                    }
                } else {
                    if (!empty($data)) {
                        return;
                    }    
                }
            }

            $event->getForm()->addError(new FormError('Filter empty'));
        };
        $builder->addEventListener(FormEvents::POST_BIND, $listener);
    }
    
    /**
    * Nombre
    * 
    * @return string
    */
    public function getName()
    {
        return 'ipap_ejemplo_asistenciabundle_alumnofiltertype';
    }
}
