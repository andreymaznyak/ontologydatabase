<?php

namespace Meta\OntologyCreateBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class LegalEntityAdmin extends Admin
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
                        'required' => true,
                        'label' => 'Название'
                        )
                    )
            ->add('purposeactivity',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Цель деятельности'
                        )
                    )
            ->add('volumerigthparticip',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объем прав участников'
                        )
                    )
            ->add('ownershipform',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Форма собственности'
                        )
                    )
            
            ->add('volumesliability',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объем ответсвенности'
                        )
                    )
            ->add('participants',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Состав участников'
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
            ->add('purposeactivity',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Цель деятельности'
                        )
                    )
            ->add('volumerigthparticip',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объем прав участников'
                        )
                    )
            ->add('ownershipform',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Форма собственности'
                        )
                    )
            
            ->add('volumesliability',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объем ответсвенности'
                        )
                    )
            ->add('participants',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Состав участников'
                        )
                    )
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                ),
                'label' => 'Дейсвия'
                
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
            ->add('purposeactivity',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Цель деятельности'
                        )
                    )
            ->add('volumerigthparticip',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объем прав участников'
                        )
                    )
            ->add('ownershipform',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Форма собственности'
                        )
                    )
            
            ->add('volumesliability',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объем ответсвенности'
                        )
                    )
            ->add('participants',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Состав участников'
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
            ->add('purposeactivity',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Цель деятельности'
                        )
                    )
            ->add('volumerigthparticip',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объем прав участников'
                        )
                    )
            ->add('ownershipform',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Форма собственности'
                        )
                    )
            
            ->add('volumesliability',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объем ответсвенности'
                        )
                    )
            ->add('participants',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Состав участников'
                        )
                    )
        ;
    }
}
