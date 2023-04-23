<?php

namespace App\Controller;

use App\Entity\Typereclamation;
use App\Form\TypereclamationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/typereclamation')]
class TypereclamationController extends AbstractController
{
    #[Route('/', name: 'app_typereclamation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $typereclamations = $entityManager
            ->getRepository(Typereclamation::class)
            ->findAll();

        return $this->render('typereclamation/index.html.twig', [
            'typereclamations' => $typereclamations,
        ]);
    }

    #[Route('/new', name: 'app_typereclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $typereclamation = new Typereclamation();
        $form = $this->createForm(TypereclamationType::class, $typereclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($typereclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_typereclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('typereclamation/new.html.twig', [
            'typereclamation' => $typereclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idtr}', name: 'app_typereclamation_show', methods: ['GET'])]
    public function show(Typereclamation $typereclamation): Response
    {
        return $this->render('typereclamation/show.html.twig', [
            'typereclamation' => $typereclamation,
        ]);
    }

    #[Route('/{idtr}/edit', name: 'app_typereclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Typereclamation $typereclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TypereclamationType::class, $typereclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_typereclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('typereclamation/edit.html.twig', [
            'typereclamation' => $typereclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idtr}', name: 'app_typereclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Typereclamation $typereclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typereclamation->getIdtr(), $request->request->get('_token'))) {
            $entityManager->remove($typereclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_typereclamation_index', [], Response::HTTP_SEE_OTHER);
    }
}
