<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meta\OntologyCreateBundle\Entity\SubjectArea;
use Meta\OntologyCreateBundle\Form\SubjectAreaType;

/**
 * SubjectArea controller.
 *
 */
class SubjectAreaController extends Controller
{

    /**
     * Lists all SubjectArea entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MetaOntologyBundle:SubjectArea')->findAll();

        return $this->render('MetaOntologyBundle:SubjectArea:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new SubjectArea entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new SubjectArea();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subjectarea_show', array('id' => $entity->getId())));
        }

        return $this->render('MetaOntologyBundle:SubjectArea:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a SubjectArea entity.
    *
    * @param SubjectArea $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(SubjectArea $entity)
    {
        $form = $this->createForm(new SubjectAreaType(), $entity, array(
            'action' => $this->generateUrl('subjectarea_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SubjectArea entity.
     *
     */
    public function newAction()
    {
        $entity = new SubjectArea();
        $form   = $this->createCreateForm($entity);

        return $this->render('MetaOntologyBundle:SubjectArea:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SubjectArea entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:SubjectArea')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubjectArea entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:SubjectArea:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing SubjectArea entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:SubjectArea')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubjectArea entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:SubjectArea:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a SubjectArea entity.
    *
    * @param SubjectArea $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SubjectArea $entity)
    {
        $form = $this->createForm(new SubjectAreaType(), $entity, array(
            'action' => $this->generateUrl('subjectarea_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SubjectArea entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:SubjectArea')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubjectArea entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('subjectarea_edit', array('id' => $id)));
        }

        return $this->render('MetaOntologyBundle:SubjectArea:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a SubjectArea entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MetaOntologyBundle:SubjectArea')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SubjectArea entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('subjectarea'));
    }

    /**
     * Creates a form to delete a SubjectArea entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subjectarea_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
