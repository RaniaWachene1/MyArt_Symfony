<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Galeries;
use App\Form\ArticlesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;

#[Route('/articles')]
class ArticlesController extends AbstractController
{
    #[Route('/', name: 'app_articles_index', methods: ['GET'])]
    public function index(Request $request,EntityManagerInterface $entityManager): Response
    {
        $articles = $entityManager
            ->getRepository(Articles::class)
            ->findAll();

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }
    #[Route('/indexadmin', name: 'app_articles_indexadmin', methods: ['GET'])]
    public function indexadmin(EntityManagerInterface $entityManager): Response
    {
        $articles = $entityManager
            ->getRepository(Articles::class)
            ->findAll();

        return $this->render('articles/indexadmin.html.twig', [
            'articles' => $articles,
        ]);
    }
    #[Route('/indexfront', name: 'app_articles_indexfront', methods: ['GET'])]
    public function indexFront(EntityManagerInterface $entityManager): Response
    {
        $galeries=$entityManager->getRepository(Galeries::class)->findAll();
        $articles = $entityManager
            ->getRepository(Articles::class)
            ->findAll();

        return $this->render('articles/indexfront.html.twig', [
            'articles' => $articles,
            'galeries' => $galeries,
        ]);
    }

    #[Route('/new', name: 'app_articles_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $article = new Articles();
        $form = $this->createForm(ArticlesType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existingArticle = $entityManager->getRepository(Articles::class)->findOneBy([
                'titreArticle' => $article->getTitreArticle()
            ]);
            
            if ($existingArticle !== null) {
                $flashy->error('Article title already exists',5000);
                return $this->redirectToRoute('app_articles_new');
            }
                else{
                    $article->setIdUser(31);
            $article->setRate(1);
            $entityManager->persist($article);
            $entityManager->flush();
            $flashy->success('Article successfully created', 5000);
            return $this->redirectToRoute('app_articles_index', [], Response::HTTP_SEE_OTHER);
        }
    }

        return $this->renderForm('articles/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{idArticle}', name: 'app_articles_show', methods: ['GET'])]
    public function show(Articles $article): Response
    {
        return $this->render('articles/show.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/{idArticle}/edit', name: 'app_articles_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Articles $article, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(ArticlesType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $flashy->success('Article successfully updated', 5000);

            return $this->redirectToRoute('app_articles_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('articles/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{idArticle}', name: 'app_articles_delete', methods: ['POST'])]
    public function delete(Request $request, Articles $article, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getIdArticle(), $request->request->get('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
            $flashy->success('Article successfully deleted', 5000);
        }

        return $this->redirectToRoute('app_articles_index', [], Response::HTTP_SEE_OTHER);
    }
}
