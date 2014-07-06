<?php

namespace Meta\ClassificationLegalEntitiesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LegalEntityType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('name')
            ->add('purposeactivity')
            ->add('ownershipform')
            ->add('participants')
            ->add('volumesliability')
            ->add('volumerigthparticip')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Meta\ClassificationLegalEntitiesBundle\Entity\LegalEntity',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'legalentity';
    }
}
