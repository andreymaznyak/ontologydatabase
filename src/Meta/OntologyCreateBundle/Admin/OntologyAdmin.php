<?php

namespace Meta\OntologyCreateBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OntologyAdmin extends Admin
{
    protected $translationDomain = 'SonataPageBundle'; // default is 'messages'
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
            ->add('extansions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Расширения онтологии'
                        )
                    )
            ->add('includies',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Используемые онтологии'
                        )
                    )
            ->add('subjectarea',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Предметная область'
                        )
                    )
            ->add('objects',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объекты'
                        )
                    )
            ->add('processes',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Процессы'
                        )
                    )
            ->add('restrictions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничения'
                        )
                    )
            ->add('constants',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Константы'
                        )
                    )       
//          
//              ->add('title')
//            ->add('lft')
//            ->add('rgt')
//            ->add('root')
//            ->add('lvl')
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
            ->add('extansions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Расширения онтологии'
                        )
                    )
            ->add('includies',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Используемые онтологии'
                        )
                    )
            ->add('subjectarea',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Предметная область'
                        )
                    )
            ->add('objects',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объекты'
                        )
                    )
            ->add('processes',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Процессы'
                        )
                    )
            ->add('restrictions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничения'
                        )
                    )
            ->add('constants',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Константы'
                        )
                    )
            //->add('title')
            //->add('lft')
            //->add('rgt')
            //->add('root')
            //->add('lvl')
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
            ->add('extansions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Расширения онтологии'
                        )
                    )
            ->add('includies',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Используемые онтологии'
                        )
                    )
            ->add('subjectarea',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Предметная область'
                        )
                    )
            ->add('objects',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объекты'
                        )
                    )
            ->add('processes',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Процессы'
                        )
                    )
            ->add('restrictions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничения'
                        )
                    )
            ->add('constants',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Константы'
                        )
                    )
//            ->add('title')
//            ->add('lft')
//            ->add('rgt')
//            ->add('root')
//            ->add('lvl')
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
            ->add('extansions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Расширения онтологии'
                        )
                    )
            ->add('includies',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Используемые онтологии'
                        )
                    )
            ->add('subjectarea',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Предметная область'
                        )
                    )
            ->add('objects',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Объекты'
                        )
                    )
            ->add('processes',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Процессы'
                        )
                    )
            ->add('restrictions',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Ограничения'
                        )
                    )
            ->add('constants',
                    null,
                    array(  
                        'required' => false,
                        'label' => 'Константы'
                        )
                    ) 
//            ->add('title')
//            ->add('lft')
//            ->add('rgt')
//            ->add('root')
//            ->add('lvl')
        ;
    }
}
