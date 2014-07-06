<?php

namespace Meta\ClassificationLegalEntitiesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LegalEntityFilterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('name', 'filter_text')
            ->add('purposeactivity', 'filter_entity', array('class' => 'Meta\ClassificationLegalEntitiesBundle\Entity\PurposeActivity'))
            ->add('ownershipform', 'filter_entity', array('class' => 'Meta\ClassificationLegalEntitiesBundle\Entity\OwnershipForm'))
            ->add('participants', 'filter_entity', array('class' => 'Meta\ClassificationLegalEntitiesBundle\Entity\Participants'))
            ->add('volumesliability', 'filter_entity', array('class' => 'Meta\ClassificationLegalEntitiesBundle\Entity\VolumesLiability'))
            ->add('volumerigthparticip', 'filter_entity', array('class' => 'Meta\ClassificationLegalEntitiesBundle\Entity\VolumesRightsParticipants'))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'        => 'Meta\ClassificationLegalEntitiesBundle\Entity\LegalEntity',
            'csrf_protection'   => false,
            'validation_groups' => array('filter'),
            'method'            => 'GET',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'legalentity_filter';
    }
}
