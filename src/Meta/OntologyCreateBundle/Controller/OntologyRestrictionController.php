<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meta\OntologyCreateBundle\Entity\OntologyRestriction;
use Meta\OntologyCreateBundle\Form\OntologyRestrictionType;

/**
 * OntologyRestriction controller.
 *
 */
class OntologyRestrictionController extends Controller
{

    /**
     * Lists all OntologyRestriction entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MetaOntologyBundle:OntologyRestriction')->findAll();

        return $this->render('MetaOntologyBundle:OntologyRestriction:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new OntologyRestriction entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new OntologyRestriction();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ontologyrestriction_show', array('id' => $entity->getId())));
        }

        return $this->render('MetaOntologyBundle:OntologyRestriction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a OntologyRestriction entity.
    *
    * @param OntologyRestriction $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(OntologyRestriction $entity)
    {
        $form = $this->createForm(new OntologyRestrictionType(), $entity, array(
            'action' => $this->generateUrl('ontologyrestriction_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new OntologyRestriction entity.
     *
     */
    public function newAction()
    {
        $entity = new OntologyRestriction();
        $form   = $this->createCreateForm($entity);

        return $this->render('MetaOntologyBundle:OntologyRestriction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OntologyRestriction entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:OntologyRestriction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OntologyRestriction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:OntologyRestriction:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing OntologyRestriction entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:OntologyRestriction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OntologyRestriction entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:OntologyRestriction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a OntologyRestriction entity.
    *
    * @param OntologyRestriction $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(OntologyRestriction $entity)
    {
        $form = $this->createForm(new OntologyRestrictionType(), $entity, array(
            'action' => $this->generateUrl('ontologyrestriction_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing OntologyRestriction entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:OntologyRestriction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OntologyRestriction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ontologyrestriction_edit', array('id' => $id)));
        }

        return $this->render('MetaOntologyBundle:OntologyRestriction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a OntologyRestriction entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MetaOntologyBundle:OntologyRestriction')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find OntologyRestriction entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ontologyrestriction'));
    }

    /**
     * Creates a form to delete a OntologyRestriction entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ontologyrestriction_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
