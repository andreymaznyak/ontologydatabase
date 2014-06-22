<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meta\OntologyCreateBundle\Entity\DataType;
use Meta\OntologyCreateBundle\Form\DataTypeType;

/**
 * DataType controller.
 *
 */
class DataTypeController extends Controller
{

    /**
     * Lists all DataType entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MetaOntologyBundle:DataType')->findAll();

        return $this->render('MetaOntologyBundle:DataType:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new DataType entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new DataType();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('datatype_show', array('id' => $entity->getId())));
        }

        return $this->render('MetaOntologyBundle:DataType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a DataType entity.
    *
    * @param DataType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(DataType $entity)
    {
        $form = $this->createForm(new DataTypeType(), $entity, array(
            'action' => $this->generateUrl('datatype_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DataType entity.
     *
     */
    public function newAction()
    {
        $entity = new DataType();
        $form   = $this->createCreateForm($entity);

        return $this->render('MetaOntologyBundle:DataType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DataType entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:DataType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DataType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:DataType:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing DataType entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:DataType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DataType entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:DataType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a DataType entity.
    *
    * @param DataType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DataType $entity)
    {
        $form = $this->createForm(new DataTypeType(), $entity, array(
            'action' => $this->generateUrl('datatype_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing DataType entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:DataType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DataType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('datatype_edit', array('id' => $id)));
        }

        return $this->render('MetaOntologyBundle:DataType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a DataType entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MetaOntologyBundle:DataType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DataType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('datatype'));
    }

    /**
     * Creates a form to delete a DataType entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('datatype_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
