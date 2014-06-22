<?php

namespace Meta\OntologyCreateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OntologyProcessType extends AbstractType
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
            ->add('algorithm')
            ->add('period')
            ->add('periodtype')
            ->add('ontology')
            ->add('starttrigger')
            ->add('stoptrigger')
            ->add('objects')
            ->add('extansions')
            ->add('ontologeis')
            ->add('ontologyrestrictions')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Meta\OntologyCreateBundle\Entity\OntologyProcess'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'meta_ontologycreatebundle_ontologyprocess';
    }
}
