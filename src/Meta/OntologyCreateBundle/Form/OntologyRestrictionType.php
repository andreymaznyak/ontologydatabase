<?php

namespace Meta\OntologyCreateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OntologyRestrictionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('value')
            ->add('ontology')
            ->add('restrictiontype')
            ->add('objects')
            ->add('processes')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Meta\OntologyCreateBundle\Entity\OntologyRestriction'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'meta_ontologycreatebundle_ontologyrestriction';
    }
}
