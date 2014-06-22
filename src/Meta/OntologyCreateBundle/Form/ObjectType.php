<?php

namespace Meta\OntologyCreateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ObjectType extends AbstractType
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
            ->add('timestore')
            ->add('ontology')
            ->add('processes')
            ->add('ontologyrestrictions')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Meta\OntologyCreateBundle\Entity\Object'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'meta_ontologycreatebundle_object';
    }
}
