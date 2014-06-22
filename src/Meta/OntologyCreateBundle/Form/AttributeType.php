<?php

namespace Meta\OntologyCreateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AttributeType extends AbstractType
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
            ->add('object')
            ->add('attributedatatype')
            ->add('attributerestriction')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Meta\OntologyCreateBundle\Entity\Attribute'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'meta_ontologycreatebundle_attribute';
    }
}
