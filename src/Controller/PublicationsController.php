<?php

namespace App\Controller;

use App\Entity\Publications;
use App\Form\PublicationsType;
use App\Repository\PublicationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/publications")
 */
class PublicationsController extends AbstractController
{
    /**
     * @Route("/", name="publications_index", methods={"GET"})
     */
    public function index(PublicationsRepository $publicationsRepository): Response
    {
        return $this->render('publications/index.html.twig', [
            'publications' => $publicationsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="publications_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $publication = new Publications();
        $form = $this->createForm(PublicationsType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($publication);
            $entityManager->flush();

            return $this->redirectToRoute('publications_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('publications/new.html.twig', [
            'publication' => $publication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="publications_show", methods={"GET"})
     */
    public function show(Publications $publication): Response
    {
        return $this->render('publications/show.html.twig', [
            'publication' => $publication,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="publications_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Publications $publication, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PublicationsType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('publications_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('publications/edit.html.twig', [
            'publication' => $publication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="publications_delete", methods={"POST"})
     */
    public function delete(Request $request, Publications $publication, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publication->getId(), $request->request->get('_token'))) {
            $entityManager->remove($publication);
            $entityManager->flush();
        }

        return $this->redirectToRoute('publications_index', [], Response::HTTP_SEE_OTHER);
    }
}
