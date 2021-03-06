<?php

namespace Meta\OntologyCreateBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SubjectAreaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('id')
            ->add('name',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Название'
                        )
                    )
            ->add('description',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Описание'
                        )
                    )
            ->add('ontologyarea',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Онтологии'
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
//            ->add('id')
            ->add('name',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Название'
                        )
                    )
            ->add('description',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Описание'
                        )
                    )
            ->add('ontologyarea',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Онтологии'
                        )
                    )
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
//            ->add('id')
            ->add('name',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Название'
                        )
                    )
            ->add('description',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Описание'
                        )
                    )
            ->add('ontologyarea',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Онтологии'
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
//            ->add('id')
            ->add('name',
                    null,
                    array(  
                        'required' => true,
                        'label' => 'Название'
                        )
                    )
            ->add('description',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Описание'
                        )
                    )
            ->add('ontologyarea',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Онтологии'
                        )
                    )
        ;
    }
}
