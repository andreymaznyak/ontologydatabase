<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meta\OntologyCreateBundle\Entity\AttributeRestriction;
use Meta\OntologyCreateBundle\Form\AttributeRestrictionType;

/**
 * AttributeRestriction controller.
 *
 */
class AttributeRestrictionController extends Controller
{

    /**
     * Lists all AttributeRestriction entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MetaOntologyBundle:AttributeRestriction')->findAll();

        return $this->render('MetaOntologyBundle:AttributeRestriction:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AttributeRestriction entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AttributeRestriction();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('attributerestriction_show', array('id' => $entity->getId())));
        }

        return $this->render('MetaOntologyBundle:AttributeRestriction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a AttributeRestriction entity.
    *
    * @param AttributeRestriction $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(AttributeRestriction $entity)
    {
        $form = $this->createForm(new AttributeRestrictionType(), $entity, array(
            'action' => $this->generateUrl('attributerestriction_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AttributeRestriction entity.
     *
     */
    public function newAction()
    {
        $entity = new AttributeRestriction();
        $form   = $this->createCreateForm($entity);

        return $this->render('MetaOntologyBundle:AttributeRestriction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AttributeRestriction entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:AttributeRestriction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AttributeRestriction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:AttributeRestriction:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing AttributeRestriction entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:AttributeRestriction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AttributeRestriction entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:AttributeRestriction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AttributeRestriction entity.
    *
    * @param AttributeRestriction $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AttributeRestriction $entity)
    {
        $form = $this->createForm(new AttributeRestrictionType(), $entity, array(
            'action' => $this->generateUrl('attributerestriction_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AttributeRestriction entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:AttributeRestriction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AttributeRestriction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('attributerestriction_edit', array('id' => $id)));
        }

        return $this->render('MetaOntologyBundle:AttributeRestriction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AttributeRestriction entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MetaOntologyBundle:AttributeRestriction')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AttributeRestriction entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('attributerestriction'));
    }

    /**
     * Creates a form to delete a AttributeRestriction entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('attributerestriction_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
