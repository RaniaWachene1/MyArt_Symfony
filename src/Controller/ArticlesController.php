<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Commentaire;
use App\Entity\Galeries;
use App\Entity\Panier;
use App\Entity\Rating;
use App\Entity\Users;
use App\Form\ArticlesType;
use App\Form\CommentaireType;
use App\Form\PanierType;
use App\Form\RatingType;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Knp\Component\Pager\PaginatorInterface;
use Snipe\BanBuilder\CensorWords;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;

#[Route('/articles')]
class ArticlesController extends AbstractController
{
    #[Route('/', name: 'app_articles_index', methods: ['GET'])]
    public function index(Request $request,EntityManagerInterface $entityManager,PaginatorInterface $paginator): Response
    {
        $donnees = $entityManager
            ->getRepository(Articles::class)
            ->findAll();
        $articles=$paginator->paginate(
        $donnees,// Requête contenant les données à paginer (ici les articles
        $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
    2  // Nombre de résultats par page
);
        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }
    #[Route('/indexadmin', name: 'app_articles_indexadmin', methods: ['GET'])]
    public function indexadmin(EntityManagerInterface $entityManager,PaginatorInterface $paginator,Request $request): Response
    {
        $donnees = $entityManager
            ->getRepository(Articles::class)
            ->findAll();
        $articles=$paginator->paginate(
            $donnees,// Requête contenant les données à paginer (ici les articles
            $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            2  // Nombre de résultats par page
        );
        return $this->render('articles/indexadmin.html.twig', [
            'articles' => $articles,
        ]);
    }
    #[Route('/indexfront', name: 'app_articles_indexfront', methods: ['GET'])]
    public function indexFront(EntityManagerInterface $entityManager): Response
    {      $user=$this->get('security.token_storage')->getToken()->getUser();
        $panierUser=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
        $galeries=$entityManager->getRepository(Galeries::class)->findAll();
        $articles = $entityManager
            ->getRepository(Articles::class)
            ->findAll();
        return $this->render('articles/indexfront.html.twig', [
            'articles' => $articles,
            'galeries' => $galeries,
            'cart'=>$panierUser,
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

    public function getAverageRatingForArticle($articleId,EntityManagerInterface $entityManager)
    {
        $qb = $entityManager->getRepository(Rating::class)->createQueryBuilder('r')
            ->select('AVG(r.rate) as average_rating')
            ->where('r.idArticle = :articleId')
            ->setParameter('articleId', $articleId);

        return $qb->getQuery()->getSingleScalarResult();
    }
    #[Route("/{id}/editcomment/{idc}", name:"app_articles_editcomment", methods:['GET','POST'])]
    public function editComment(Articles $article, Request $request,EntityManagerInterface $entityManager,$idc): Response
    {
        $comments=$entityManager->getRepository(Commentaire::class)->findByIdArticle($article);
        $averageRating = $this->getAverageRatingForArticle($article,$entityManager);
        $roundedAverageRating = round($averageRating);
        $galeries=$entityManager->getRepository(Galeries::class)->findAll();
        $articlebyprice=$this->trie3($entityManager);
        $user=$this->get('security.token_storage')->getToken()->getUser();
        $panierUser=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
        dump($user);
        dump($article);
        $commentaire=$entityManager->getRepository(Commentaire::class)->find($idc);
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
            $entityManager->flush();

            return $this->redirectToRoute('app_articles_quick_view', ['id'=>$article->getIdArticle()], Response::HTTP_SEE_OTHER);
        }
        $panier=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
        if($panier !== null){
            $form2=$this->createForm(PanierType::class,$panier);
            $form2->handleRequest($request);
            $total=$panier->getTotal();
            $quantite=$panier->getQuantite();
            $user=$this->get('security.token_storage')->getToken()->getUser();
            if($form2->isSubmitted() && $form2->isValid()){
                $quantite=$quantite+$panier->getQuantite();
                $total=$total+$article->getPrixArticle()*$panier->getQuantite();
                $panier->setQuantite($quantite);
                $panier->setTotal($total);
                $panier->addIdArticle($article);
                $panier->setIdUser($user);
                $entityManager->flush();
                //$session->set("panier",$panier->getIdPanier());
                return $this->redirectToRoute('app_articles_quick_view',['id'=>$article->getIdArticle()]);
            }
        }
        else{
            $panier=new Panier();
            $form2=$this->createForm(PanierType::class,$panier);
            $form2->handleRequest($request);
            if($form2->isSubmitted() && $form2->isValid()){
                $total=0;
                $total=$total+$article->getPrixArticle()*$panier->getQuantite();
                $panier->setTotal($total);
                $panier->addIdArticle($article);
                $panier->setIdUser($user);
                $entityManager->persist($panier);
                $entityManager->flush();
                // $session->set("panier",$panier->getIdPanier());

                return $this->redirectToRoute('app_articles_quick_view',['id'=>$article->getIdArticle()]);
            }
        }

        return $this->render('articles/editcomment.html.twig', [
            'article' => $article,
            'galeries'=>$galeries,
            'articletri'=>$articlebyprice,
            'commentaire' => $commentaire,
            'form' => $form->createView(),
            'formpanier'=>$form2->createView(),
            'averageRating' => $roundedAverageRating,
            'cart'=>$panierUser,
            'comments'=>$comments,


        ]);
    }
    #[Route("/{id}/quick-view", name:"app_articles_quick_view", methods:['GET','POST'])]
    public function quickView(Articles $article, Request $request,EntityManagerInterface $entityManager,SessionInterface $session): Response
    {
        $comments=$entityManager->getRepository(Commentaire::class)->findByIdArticle($article);
        $averageRating = $this->getAverageRatingForArticle($article,$entityManager);
        $roundedAverageRating = round($averageRating);
        $galeries=$entityManager->getRepository(Galeries::class)->findAll();
        $articlebyprice=$this->trie3($entityManager);
        $commentaire = new Commentaire();
        $user=$this->get('security.token_storage')->getToken()->getUser();
        $panierUser=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
        dump($user);
        dump($article);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        $nb = $article->getNbcomment();
        if ($form->isSubmitted() && $form->isValid()) {
            $nb++;
            $article->setNbcomment($nb);
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
        $panier=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
        if($panier !== null){
            $form2=$this->createForm(PanierType::class,$panier);
            $form2->handleRequest($request);
            $total=$panier->getTotal();
            $quantite=$panier->getQuantite();
            $user=$this->get('security.token_storage')->getToken()->getUser();
            if($form2->isSubmitted() && $form2->isValid()){
                $quantite=$quantite+$panier->getQuantite();
                $total=$total+$article->getPrixArticle()*$panier->getQuantite();
                $panier->setQuantite($quantite);
                $panier->setTotal($total);
                $panier->addIdArticle($article);
                $panier->setIdUser($user);
                $entityManager->flush();
                //$session->set("panier",$panier->getIdPanier());
                return $this->redirectToRoute('app_articles_quick_view',['id'=>$article->getIdArticle()]);
            }
        }
        else{
            $panier=new Panier();
            $form2=$this->createForm(PanierType::class,$panier);
            $form2->handleRequest($request);
            if($form2->isSubmitted() && $form2->isValid()){
                $total=0;
                $total=$total+$article->getPrixArticle()*$panier->getQuantite();
                $panier->setTotal($total);
                $panier->addIdArticle($article);
                $panier->setIdUser($user);
                $entityManager->persist($panier);
                $entityManager->flush();
               // $session->set("panier",$panier->getIdPanier());

                return $this->redirectToRoute('app_articles_quick_view',['id'=>$article->getIdArticle()]);
            }
        }

        return $this->render('articles/detail.html.twig', [
            'article' => $article,
            'galeries'=>$galeries,
            'articletri'=>$articlebyprice,
            'commentaire' => $commentaire,
            'form' => $form->createView(),
            'formpanier'=>$form2->createView(),
            'averageRating' => $roundedAverageRating,
            'cart'=>$panierUser,
            'comments'=>$comments,


        ]);
    }
    #[Route('/cart', name: 'app_articles_cart', methods: ['GET'])]
       public function viewCart(EntityManagerInterface $entityManager):Response
       {
           $user=$this->get('security.token_storage')->getToken()->getUser();
           $panierUser=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
           return $this->render('articles/cart.html.twig',
           [
               'cart'=>$panierUser,
           ]);

       }
    #[Route('/new', name: 'app_articles_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $article = new Articles();
        $form = $this->createForm(ArticlesType::class, $article);
        $form->handleRequest($request);
        $user=$this->get('security.token_storage')->getToken()->getUser();
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
    #[Route('/cart/{id}/pdfcart', name: 'app_articles_pdfcart')]
    public function pdfcart(Panier $panier): Response
    {
        $html = $this->renderView('articles/pdfcart.html.twig', [
            'panier'=>$panier,

        ]);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');
        $response->setContent($dompdf->output());

        return $response;
    }

    #[Route('/{id}/pdf', name: 'app_articles_pdf')]
    public function pdf(Articles $article): Response
    {

        $html = $this->renderView('articles/pdf.html.twig', [
            'article'=>$article,

        ]);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');
        $response->setContent($dompdf->output());

        return $response;
    }

}
