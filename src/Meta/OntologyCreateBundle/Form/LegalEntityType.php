<?php

namespace Meta\OntologyCreateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LegalEntityType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Название'
                        )
                    )
            ->add('purposeactivity')
            ->add('ownershipform')
            ->add('participants')
            ->add('volumesliability')
            ->add('volumerigthparticip')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Meta\OntologyCreateBundle\Entity\LegalEntity'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'meta_ontologycreatebundle_legalentity';
    }
}
