<?php

namespace Meta\OntologyCreateBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class DataTypeAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('parent')
            ->add('object')
            ->add('ontologyprocess')
            ->add('simpledatatype')
            ->add('constant')
            
            ->add('iscompositedatatype')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name')
            ->add('description')
            ->add('iscompositedatatype')
            ->add('parent')
            ->add('object')
            ->add('ontologyprocess')
            ->add('simpledatatype')
            ->add('constant')
            
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
            ->add('name')
            ->add('description')
            ->add('iscompositedatatype')
            ->add('parent')
            ->add('object')
            ->add('ontologyprocess')
            ->add('simpledatatype')
            ->add('constant')
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('description')
            ->add('iscompositedatatype')
            ->add('parent')
            ->add('object')
            ->add('ontologyprocess')
            ->add('simpledatatype')
            ->add('constant')
            
        ;
    }
}
