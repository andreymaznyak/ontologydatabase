<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meta\OntologyCreateBundle\Entity\SimpleDataType;
use Meta\OntologyCreateBundle\Form\SimpleDataTypeType;

/**
 * SimpleDataType controller.
 *
 */
class SimpleDataTypeController extends Controller
{

    /**
     * Lists all SimpleDataType entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MetaOntologyBundle:SimpleDataType')->findAll();

        return $this->render('MetaOntologyBundle:SimpleDataType:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new SimpleDataType entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new SimpleDataType();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('simpledatatype_show', array('id' => $entity->getId())));
        }

        return $this->render('MetaOntologyBundle:SimpleDataType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a SimpleDataType entity.
    *
    * @param SimpleDataType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(SimpleDataType $entity)
    {
        $form = $this->createForm(new SimpleDataTypeType(), $entity, array(
            'action' => $this->generateUrl('simpledatatype_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SimpleDataType entity.
     *
     */
    public function newAction()
    {
        $entity = new SimpleDataType();
        $form   = $this->createCreateForm($entity);

        return $this->render('MetaOntologyBundle:SimpleDataType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SimpleDataType entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:SimpleDataType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SimpleDataType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:SimpleDataType:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing SimpleDataType entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:SimpleDataType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SimpleDataType entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:SimpleDataType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a SimpleDataType entity.
    *
    * @param SimpleDataType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SimpleDataType $entity)
    {
        $form = $this->createForm(new SimpleDataTypeType(), $entity, array(
            'action' => $this->generateUrl('simpledatatype_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SimpleDataType entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:SimpleDataType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SimpleDataType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('simpledatatype_edit', array('id' => $id)));
        }

        return $this->render('MetaOntologyBundle:SimpleDataType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a SimpleDataType entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MetaOntologyBundle:SimpleDataType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SimpleDataType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('simpledatatype'));
    }

    /**
     * Creates a form to delete a SimpleDataType entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('simpledatatype_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
