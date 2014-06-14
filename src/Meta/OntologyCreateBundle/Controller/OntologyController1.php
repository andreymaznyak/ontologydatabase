<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meta\OntologyCreateBundle\Entity\Ontology;
use Meta\OntologyCreateBundle\Form\OntologyType;

/**
 * Ontology controller.
 *
 */
class OntologyController extends Controller
{

    /**
     * Lists all Ontology entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MetaOntologyBundle:Ontology')->findAll();

        return $this->render('MetaOntologyBundle:Ontology:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Ontology entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ontology();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ontology_show', array('id' => $entity->getId())));
        }

        return $this->render('MetaOntologyBundle:Ontology:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Ontology entity.
    *
    * @param Ontology $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Ontology $entity)
    {
        $form = $this->createForm(new OntologyType(), $entity, array(
            'action' => $this->generateUrl('ontology_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ontology entity.
     *
     */
    public function newAction()
    {
        $entity = new Ontology();
        $form   = $this->createCreateForm($entity);

        return $this->render('MetaOntologyBundle:Ontology:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ontology entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:Ontology')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ontology entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:Ontology:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Ontology entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:Ontology')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ontology entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MetaOntologyBundle:Ontology:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Ontology entity.
    *
    * @param Ontology $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ontology $entity)
    {
        $form = $this->createForm(new OntologyType(), $entity, array(
            'action' => $this->generateUrl('ontology_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ontology entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MetaOntologyBundle:Ontology')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ontology entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ontology_edit', array('id' => $id)));
        }

        return $this->render('MetaOntologyBundle:Ontology:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Ontology entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MetaOntologyBundle:Ontology')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ontology entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ontology'));
    }

    /**
     * Creates a form to delete a Ontology entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ontology_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
