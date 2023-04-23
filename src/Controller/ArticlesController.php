<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Commentaire;
use App\Entity\Galeries;
use App\Entity\Users;
use App\Form\ArticlesType;
use App\Form\CommentaireType;
use Doctrine\ORM\EntityManagerInterface;
use Snipe\BanBuilder\CensorWords;
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
    public  function  trie3(EntityManagerInterface  $entityManager)
    {
        $repo=$entityManager->getRepository(Articles::class);
        return $repo->createQueryBuilder('a')
            ->setMaxResults(3)
            ->orderBy('a.prixArticle','DESC')
            ->getQuery()
            ->getResult();
    }
    #[Route("/{id}/quick-view", name:"app_articles_quick_view", methods:['GET','POST'])]
    public function quickView(Articles $article, Request $request,EntityManagerInterface $entityManager): Response
    {
        $galeries=$entityManager->getRepository(Galeries::class)->findAll();
        $articlebyprice=$this->trie3($entityManager);
        $commentaire = new Commentaire();
        $user=$entityManager->getRepository(Users::class)->find(2);
        dump($user);
        dump($article);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $censor = new CensorWords;
            $langs = array('fr', 'it', 'en-us', 'en-uk', 'de', 'es','tn');
            $badwords = $censor->setDictionary($langs);
            $censor->setReplaceChar("*");
            $string = $censor->censorString($commentaire->getContenu());
            $commentaire->setContenu($string['clean']);
            $commentaire->setIdUser($user);
            $commentaire->setIdArticle($article);
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_articles_quick_view', ['id'=>$article->getIdArticle()], Response::HTTP_SEE_OTHER);
        }
        return $this->render('articles/detail.html.twig', [
            'article' => $article,
            'galeries'=>$galeries,
            'articletri'=>$articlebyprice,
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/new', name: 'app_articles_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $article = new Articles();
        $form = $this->createForm(ArticlesType::class, $article);
        $form->handleRequest($request);
        $user=$entityManager->getRepository(Users::class)->find(2);
        if ($form->isSubmitted() && $form->isValid()) {
            $existingArticle = $entityManager->getRepository(Articles::class)->findOneBy([
                'titreArticle' => $article->getTitreArticle()
            ]);
            
            if ($existingArticle !== null) {
                $flashy->error('Article title already exists',5000);
                return $this->redirectToRoute('app_articles_new');
            }
                else{
                    $article->setIdUser($user);
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
    public function show(Articles $article,EntityManagerInterface $entityManager): Response
    {   $comments=$entityManager->getRepository(Commentaire::class)->findByIdArticle($article);
        return $this->render('articles/show.html.twig', [
            'article' => $article,
            'comments'=>$comments,
        ]);
    }

    #[Route('/{idArticle}/admin', name: 'app_articles_showadmin', methods: ['GET'])]
    public function showadmin(Articles $article,EntityManagerInterface $entityManager): Response
    {   $comments=$entityManager->getRepository(Commentaire::class)->findByIdArticle($article);
        return $this->render('articles/showadmin.html.twig', [
            'article' => $article,
            'comments'=>$comments,
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
            $article->setPhotoArticle($data['photoArticle'] ?? '');
            $entityManager->remove($article);
            $entityManager->flush();
            $flashy->success('Article successfully deleted', 5000);
        }

        return $this->redirectToRoute('app_articles_index', [], Response::HTTP_SEE_OTHER);
    }

     /**
     * @Route("/article/{id}/rate", name="article_rate")
     */
    public function rate(Request $request, Article $article): Response
    {
        $rating = new Rating();

        $form = $this->createForm(RatingType::class, $rating);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rating = $form->getData();
            $rating->setArticle($article);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($rating);
            $entityManager->flush();

            return $this->redirectToRoute('article_show', ['id' => $article->getId()]);
        }

        return $this->render('article/rate.html.twig', [
            'article' => $article,
            'form' => $form->createView()
        ]);
    }

    #[Route('/articles/{id}/pdf', name: 'articles_pdf')]
public function pdf(Articles $article): Response
{
    $options = new Options();
    $options->set('defaultFont', 'Arial');
    $options->set('fontSize', 12);

    $dompdf = new Dompdf($options);

    $html = $this->renderView('pdf/index.html.twig', [
        'article' => $article,
    ]);

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    return new Response(
        $dompdf->output(),
        200,
        [
            'Content-Type' => 'application/pdf',
        ]
    );
}


}
