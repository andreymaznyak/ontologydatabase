<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meta\OntologyCreateBundle\Entity\Object;
use Meta\OntologyCreateBundle\Form\ObjectType;

/**
 * Object controller.
 *
 */
class ObjectController extends Controller
{

    /**
     * Lists all Object entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MetaOntologyBundle:Object')->findAll();

        return $this->render('MetaOntologyBundle:Object:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Object entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Object();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('object_show', array('id' => $entity->getId())));
        }

        return $this->render('MetaOntologyBundle:Object:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Object entity.
    *
    * @param Object $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Object $entity)
    {
        $form = $this->createForm(new ObjectType(), $entity, array(
            'action' => $this->generateUrl('object_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Object entity.
     *
     */
    public function newAction()
    {
        $entity = new Object();
        $form   = $this->createCreateForm($entity);

        return $this->render('MetaOntologyBundle:Object:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Object entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:Object')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Object entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:Object:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Object entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:Object')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Object entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:Object:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Object entity.
    *
    * @param Object $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Object $entity)
    {
        $form = $this->createForm(new ObjectType(), $entity, array(
            'action' => $this->generateUrl('object_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Object entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:Object')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Object entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('object_edit', array('id' => $id)));
        }

        return $this->render('MetaOntologyBundle:Object:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Object entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MetaOntologyBundle:Object')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Object entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('object'));
    }

    /**
     * Creates a form to delete a Object entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('object_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
