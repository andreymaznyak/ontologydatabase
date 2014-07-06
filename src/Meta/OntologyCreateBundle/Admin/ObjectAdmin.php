<?php

namespace Meta\OntologyCreateBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ObjectAdmin extends Admin
{
    protected $translationDomain = 'MetaOntologyBundle';
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
                        'label' => 'название'
                        )
                    )
            ->add('description',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Описание'
                        )
                    )
            ->add('ontology',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Онтология'
                        )
                    )
//            ->add('processes',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Процесс'
//                        )
//                    )
            ->add('ontologyrestrictions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничения онтологии'
                        )
                    )
            ->add('attributties',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Свойства'
                        )
                    )
            ->add('datatypes',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Тип данных'
                        )
                    )
//            ->add('firstrelation',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Отношения'
//                        )
//                    )
//            ->add('relation',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Отношения'
//                        )
//                    )
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
                        'required' => false,
                        'label' => 'название'
                        )
                    )
            ->add('description',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Описание'
                        )
                    )
            ->add('ontology',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Онтология'
                        )
                    )
//            ->add('processes',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Процесс'
//                        )
//                    )
            ->add('ontologyrestrictions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничения онтологии'
                        )
                    )
            ->add('attributties',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Свойства'
                        )
                    )
            ->add('datatypes',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Тип данных'
                        )
                    )
//            ->add('firstrelation',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Отношения'
//                        )
//                    )
//            ->add('relation',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Отношения'
//                        )
//                    )
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                ),
                'label' => 'Действия'
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
                        'required' => false,
                        'label' => 'название'
                        )
                    )
            ->add('description',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Описание'
                        )
                    )
            ->add('ontology',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Онтология'
                        )
                    )
//            ->add('processes',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Процесс'
//                        )
//                    )
            ->add('ontologyrestrictions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничения онтологии'
                        )
                    )
            ->add('attributties',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Свойства'
                        )
                    )
            ->add('datatypes',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Тип данных'
                        )
                    )
//            ->add('firstrelation',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Отношения'
//                        )
//                    )
//            ->add('relation',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Отношения'
//                        )
//                    )
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
                        'required' => false,
                        'label' => 'название'
                        )
                    )
            ->add('description',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Описание'
                        )
                    )
            ->add('ontology',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Онтология'
                        )
                    )
//            ->add('processes',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Процесс'
//                        )
//                    )
            ->add('ontologyrestrictions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничения онтологии'
                        )
                    )
            ->add('attributties',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Свойства'
                        )
                    )
            ->add('datatypes',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Тип данных'
                        )
                    )
//            ->add('firstrelation',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Отношения'
//                        )
//                    )
//            ->add('relation',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'Отношения'
//                        )
//                    )
        ;
    }
}
