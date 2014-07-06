<?php

namespace Meta\ClassificationLegalEntitiesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meta\ClassificationLegalEntitiesBundle\Entity\LegalEntity;
use Meta\ClassificationLegalEntitiesBundle\Form\Type\LegalEntityType;
use Meta\ClassificationLegalEntitiesBundle\Form\Type\LegalEntityFilterType;
use Symfony\Component\Form\FormInterface;
use Doctrine\ORM\QueryBuilder;

/**
 * LegalEntity controller.
 *
 */
class LegalEntityController extends Controller
{
    /**
     * Lists all LegalEntity entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new LegalEntityFilterType());
        if (!is_null($response = $this->saveFilter($form, 'legalentity', 'legalentity'))) {
            $request->setLocale('ru_RU');
            return $response;
        }
        $qb = $em->getRepository('MetaClassificationLegalEntitiesBundle:LegalEntity')->createQueryBuilder('l');
        $paginator = $this->filter($form, $qb, 'legalentity');
                return $this->render('MetaClassificationLegalEntitiesBundle:LegalEntity:index.html.twig', array(
            'form'      => $form->createView(),
            'paginator' => $paginator,
        ));
        
    }

    /**
     * Finds and displays a LegalEntity entity.
     *
     */
    public function showAction(LegalEntity $legalentity)
    {
        $deleteForm = $this->createDeleteForm($legalentity->getId());

        return $this->render('MetaClassificationLegalEntitiesBundle:LegalEntity:show.html.twig', array(
            'legalentity' => $legalentity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new LegalEntity entity.
     *
     */
    public function newAction()
    {
        $legalentity = new LegalEntity();
        $form   = $this->createForm(new LegalEntityType(), $legalentity);

        return $this->render('MetaClassificationLegalEntitiesBundle:LegalEntity:new.html.twig', array(
            'legalentity' => $legalentity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new LegalEntity entity.
     *
     */
    public function createAction(Request $request)
    {
        $legalentity = new LegalEntity();
        $form = $this->createForm(new LegalEntityType(), $legalentity);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($legalentity);
            $em->flush();

            return $this->redirect($this->generateUrl('legalentity_show', array('id' => $legalentity->getId())));
        }

        return $this->render('MetaClassificationLegalEntitiesBundle:LegalEntity:new.html.twig', array(
            'legalentity' => $legalentity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing LegalEntity entity.
     *
     */
    public function editAction(LegalEntity $legalentity)
    {
        $editForm = $this->createForm(new LegalEntityType(), $legalentity, array(
            'action' => $this->generateUrl('legalentity_update', array('id' => $legalentity->getid())),
            'method' => 'PUT',
        ));
        $deleteForm = $this->createDeleteForm($legalentity->getId());

        return $this->render('MetaClassificationLegalEntitiesBundle:LegalEntity:edit.html.twig', array(
            'legalentity' => $legalentity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing LegalEntity entity.
     *
     */
    public function updateAction(LegalEntity $legalentity, Request $request)
    {
        $editForm = $this->createForm(new LegalEntityType(), $legalentity, array(
            'action' => $this->generateUrl('legalentity_update', array('id' => $legalentity->getid())),
            'method' => 'PUT',
        ));
        if ($editForm->handleRequest($request)->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirect($this->generateUrl('legalentity_edit', array('id' => $legalentity->getId())));
        }
        $deleteForm = $this->createDeleteForm($legalentity->getId());

        return $this->render('MetaClassificationLegalEntitiesBundle:LegalEntity:edit.html.twig', array(
            'legalentity' => $legalentity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Save order.
     *
     */
    public function sortAction($field, $type)
    {
        $this->setOrder('legalentity', $field, $type);

        return $this->redirect($this->generateUrl('legalentity'));
    }

    /**
     * @param string $name  session name
     * @param string $field field name
     * @param string $type  sort type ("ASC"/"DESC")
     */
    protected function setOrder($name, $field, $type = 'ASC')
    {
        $this->getRequest()->getSession()->set('sort.' . $name, array('field' => $field, 'type' => $type));
    }

    /**
     * @param  string $name
     * @return array
     */
    protected function getOrder($name)
    {
        $session = $this->getRequest()->getSession();

        return $session->has('sort.' . $name) ? $session->get('sort.' . $name) : null;
    }

    /**
     * @param QueryBuilder $qb
     * @param string       $name
     */
    protected function addQueryBuilderSort(QueryBuilder $qb, $name)
    {
        $alias = current($qb->getDQLPart('from'))->getAlias();
        if (is_array($order = $this->getOrder($name))) {
            $qb->orderBy($alias . '.' . $order['field'], $order['type']);
        }
    }

    /**
     * Save filters
     *
     * @param  FormInterface $form
     * @param  string        $name   route/entity name
     * @param  string        $route  route name, if different from entity name
     * @param  array         $params possible route parameters
     * @return Response
     */
    protected function saveFilter(FormInterface $form, $name, $route = null, array $params = null)
    {
        $request = $this->getRequest();
        $url = $this->generateUrl($route ?: $name, is_null($params) ? array() : $params);
        if ($request->query->has('submit-filter') && $form->handleRequest($request)->isValid()) {
            $request->getSession()->set('filter.' . $name, $request->query->get($form->getName()));

            return $this->redirect($url);
        } elseif ($request->query->has('reset-filter')) {
            $request->getSession()->set('filter.' . $name, null);

            return $this->redirect($url);
        }
    }

    /**
     * Filter form
     *
     * @param  FormInterface                                       $form
     * @param  QueryBuilder                                        $qb
     * @param  string                                              $name
     * @return \Knp\Component\Pager\Pagination\PaginationInterface
     */
    protected function filter(FormInterface $form, QueryBuilder $qb, $name)
    {
        if (!is_null($values = $this->getFilter($name))) {
            if ($form->submit($values)->isValid()) {
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($form, $qb);
            }
        }

        // possible sorting
        $this->addQueryBuilderSort($qb, $name);
        return $this->get('knp_paginator')->paginate($qb->getQuery(), $this->getRequest()->query->get('page', 1), 20);
    }

    /**
     * Get filters from session
     *
     * @param  string $name
     * @return array
     */
    protected function getFilter($name)
    {
        return $this->getRequest()->getSession()->get('filter.' . $name);
    }

    /**
     * Deletes a LegalEntity entity.
     *
     */
    public function deleteAction(LegalEntity $legalentity, Request $request)
    {
        $form = $this->createDeleteForm($legalentity->getId());
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($legalentity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('legalentity'));
    }

    /**
     * Create Delete form
     *
     * @param integer $id
     * @return \Symfony\Component\Form\Form
     */
    protected function createDeleteForm($id)
    {
        return $this->createFormBuilder(null, array('attr' => array('id' => 'delete')))
            ->setAction($this->generateUrl('legalentity_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
