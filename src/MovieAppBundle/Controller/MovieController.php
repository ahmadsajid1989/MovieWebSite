<?php

namespace MovieAppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MovieAppBundle\Entity\Movie;
use MovieAppBundle\Form\MovieType;

/**
 * Movie controller.
 *
 */
class MovieController extends Controller
{

    /**
     * Lists all Movie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MovieAppBundle:Movie')->findAll();

        return $this->render('MovieAppBundle:Movie:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Movie entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Movie();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('movies_show', array('id' => $entity->getId())));
        }

        return $this->render('MovieAppBundle:Movie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Movie entity.
     *
     * @param Movie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Movie $entity)
    {
        $form = $this->createForm(new MovieType(), $entity, array(
            'action' => $this->generateUrl('movies_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Movie entity.
     *
     */
    public function newAction()
    {
        $entity = new Movie();
        $form   = $this->createCreateForm($entity);

        return $this->render('MovieAppBundle:Movie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Movie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MovieAppBundle:Movie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Movie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MovieAppBundle:Movie:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Movie entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MovieAppBundle:Movie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Movie entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MovieAppBundle:Movie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Movie entity.
    *
    * @param Movie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Movie $entity)
    {
        $form = $this->createForm(new MovieType(), $entity, array(
            'action' => $this->generateUrl('movies_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Movie entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MovieAppBundle:Movie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Movie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('movies_edit', array('id' => $id)));
        }

        return $this->render('MovieAppBundle:Movie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Movie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MovieAppBundle:Movie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Movie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('movies'));
    }

    /**
     * Creates a form to delete a Movie entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('movies_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public function movieDetailsAction($id){

        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('MovieAppBundle:Movie');

        $movies = $repository->findOneBy(
            array('id' => $id)
        );

        return $this->render('MovieAppBundle:Movie:movies.html.twig', array(
            'entity' => $movies,
        ));


    }
}
