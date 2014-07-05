<?php

namespace Meta\OntologyCreateBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class VolumesRightsParticipantsAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Название'
                        )
                    )
            ->add('legalentities',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Организационно-прововая форма'
                        )
                    )
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Название'
                        )
                    )
            ->add('legalentities',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Организационно-прововая форма'
                        )
                    )
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                ),
                'label'=>'Дейсвия'
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Название'
                        )
                    )
            ->add('legalentities',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Организационно-прововая форма'
                        )
                    )
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Название'
                        )
                    )
            ->add('legalentities',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Организационно-прововая форма'
                        )
                    )
        ;
    }
}
