<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meta\OntologyCreateBundle\Entity\Trigger;
use Meta\OntologyCreateBundle\Form\TriggerType;

/**
 * Trigger controller.
 *
 */
class TriggerController extends Controller
{

    /**
     * Lists all Trigger entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MetaOntologyBundle:Trigger')->findAll();

        return $this->render('MetaOntologyBundle:Trigger:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Trigger entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Trigger();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('trigger_show', array('id' => $entity->getId())));
        }

        return $this->render('MetaOntologyBundle:Trigger:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Trigger entity.
    *
    * @param Trigger $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Trigger $entity)
    {
        $form = $this->createForm(new TriggerType(), $entity, array(
            'action' => $this->generateUrl('trigger_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Trigger entity.
     *
     */
    public function newAction()
    {
        $entity = new Trigger();
        $form   = $this->createCreateForm($entity);

        return $this->render('MetaOntologyBundle:Trigger:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Trigger entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:Trigger')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trigger entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:Trigger:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Trigger entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:Trigger')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trigger entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:Trigger:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Trigger entity.
    *
    * @param Trigger $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Trigger $entity)
    {
        $form = $this->createForm(new TriggerType(), $entity, array(
            'action' => $this->generateUrl('trigger_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Trigger entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:Trigger')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trigger entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('trigger_edit', array('id' => $id)));
        }

        return $this->render('MetaOntologyBundle:Trigger:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Trigger entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MetaOntologyBundle:Trigger')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Trigger entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trigger'));
    }

    /**
     * Creates a form to delete a Trigger entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trigger_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
