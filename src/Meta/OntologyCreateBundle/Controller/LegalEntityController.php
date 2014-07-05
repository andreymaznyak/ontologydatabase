<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meta\OntologyCreateBundle\Entity\LegalEntity;
use Meta\OntologyCreateBundle\Form\LegalEntityType;

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

        $entities = $em->getRepository('MetaOntologyBundle:LegalEntity')->findAll();

        return $this->render('MetaOntologyBundle:LegalEntity:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new LegalEntity entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new LegalEntity();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('legalentity_show', array('id' => $entity->getId())));
        }

        return $this->render('MetaOntologyBundle:LegalEntity:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a LegalEntity entity.
    *
    * @param LegalEntity $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(LegalEntity $entity)
    {
        $form = $this->createForm(new LegalEntityType(), $entity, array(
            'action' => $this->generateUrl('legalentity_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LegalEntity entity.
     *
     */
    public function newAction()
    {
        $entity = new LegalEntity();
        $form   = $this->createCreateForm($entity);

        return $this->render('MetaOntologyBundle:LegalEntity:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a LegalEntity entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:LegalEntity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LegalEntity entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:LegalEntity:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing LegalEntity entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:LegalEntity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LegalEntity entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:LegalEntity:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a LegalEntity entity.
    *
    * @param LegalEntity $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LegalEntity $entity)
    {
        $form = $this->createForm(new LegalEntityType(), $entity, array(
            'action' => $this->generateUrl('legalentity_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing LegalEntity entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:LegalEntity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LegalEntity entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('legalentity_edit', array('id' => $id)));
        }

        return $this->render('MetaOntologyBundle:LegalEntity:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a LegalEntity entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MetaOntologyBundle:LegalEntity')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LegalEntity entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('legalentity'));
    }

    /**
     * Creates a form to delete a LegalEntity entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('legalentity_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
