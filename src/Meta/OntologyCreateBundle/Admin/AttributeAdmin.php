<?php

namespace Meta\OntologyCreateBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AttributeAdmin extends Admin
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
            ->add('description',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Описание'
                        )
                    )
//            ->add('timestore',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'название'
//                        )
//                    )
            ->add('object',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объект'
                        )
                    )
            ->add('attributedatatype',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Тип данных'
                        )
                    )
            ->add('attributerestriction',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничение'
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
                        'required' => false,
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
//            ->add('timestore',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'название'
//                        )
//                    )
            ->add('object',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объект'
                        )
                    )
            ->add('attributedatatype',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Тип данных'
                        )
                    )
            ->add('attributerestriction',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничение'
                        )
                    )
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
//            ->add('timestore',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'название'
//                        )
//                    )
            ->add('object',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объект'
                        )
                    )
            ->add('attributedatatype',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Тип данных'
                        )
                    )
            ->add('attributerestriction',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничение'
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
                        'required' => false,
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
//            ->add('timestore',
//                    null,
//                    array(  
//                        'required' => false,
//                        'label' => 'название'
//                        )
//                    )
            ->add('object',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объект'
                        )
                    )
            ->add('attributedatatype',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Тип данных'
                        )
                    )
            ->add('attributerestriction',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничение'
                        )
                    )
        ;
    }
}
