<?php

namespace App\Controller;

use App\Entity\Commantaires;
use App\Form\CommantairesType;
use App\Repository\CommantairesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commantaires")
 */
class CommantairesController extends AbstractController
{
    /**
     * @Route("/", name="commantaires_index", methods={"GET"})
     */
    public function index(CommantairesRepository $commantairesRepository): Response
    {
        return $this->render('commantaires/index.html.twig', [
            'commantaires' => $commantairesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="commantaires_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commantaire = new Commantaires();
        $form = $this->createForm(CommantairesType::class, $commantaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commantaire);
            $entityManager->flush();

            return $this->redirectToRoute('commantaires_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commantaires/new.html.twig', [
            'commantaire' => $commantaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commantaires_show", methods={"GET"})
     */
    public function show(Commantaires $commantaire): Response
    {
        return $this->render('commantaires/show.html.twig', [
            'commantaire' => $commantaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commantaires_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commantaires $commantaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommantairesType::class, $commantaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('commantaires_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commantaires/edit.html.twig', [
            'commantaire' => $commantaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commantaires_delete", methods={"POST"})
     */
    public function delete(Request $request, Commantaires $commantaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commantaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commantaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commantaires_index', [], Response::HTTP_SEE_OTHER);
    }
}
