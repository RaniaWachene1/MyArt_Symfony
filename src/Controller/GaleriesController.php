<?php

namespace App\Controller;

use App\Entity\Galeries;
use App\Entity\Articles;
use App\Form\GaleriesType;
use App\Form\DeleteType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;
#[Route('/galeries')]
class GaleriesController extends AbstractController
{
    #[Route('/', name: 'app_galeries_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,PaginatorInterface $paginator,Request $request): Response
    {
        $donnees = $entityManager
            ->getRepository(Galeries::class)
            ->findAll();
        $galeries=$paginator->paginate(
            $donnees,// Requête contenant les données à paginer (ici les articles)
            $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            2  // Nombre de résultats par page
        );
        return $this->render('galeries/index.html.twig', [
            'galeries' => $galeries,
        ]);
    }

    #[Route('/new', name: 'app_galeries_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {  
        $galery = new Galeries();
        $form = $this->createForm(GaleriesType::class, $galery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existingGalerie = $entityManager->getRepository(Galeries::class)->findOneBy([
                'titreGalerie' => $galery->getTitreGalerie()
            ]);
            if ($existingGalerie !== null) {
                $flashy->error('Gallery already exists', 'http://your-awesome-link.com');
                return $this->redirectToRoute('app_galeries_new');
            }
                else{
                    $entityManager->persist($galery);
                    $entityManager->flush();
                    $flashy->success('Gallery successfully created');
                    return $this->redirectToRoute('app_galeries_index', [], Response::HTTP_SEE_OTHER);
                }
            }
           

        return $this->renderForm('galeries/new.html.twig', [
            'galery' => $galery,
            'form' => $form,
        ]);
    }

    #[Route('/{idGalerie}', name: 'app_galeries_show', methods: ['GET'])]
    public function show(Galeries $galery): Response
    {  $articles = $this->getDoctrine()->getRepository(Articles::class)->findBy(['idGalerie' => $galery]);
        return $this->render('galeries/show.html.twig', [
            'galery' => $galery,
            'articles'=>$articles
        ]);
    }

    #[Route('/{idGalerie}/edit', name: 'app_galeries_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Galeries $galery, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(GaleriesType::class, $galery);
        $form->handleRequest($request);
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findBy(['idGalerie' => $galery]);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $flashy->success('Gallery successfully updated', 5000);

            return $this->redirectToRoute('app_galeries_show', ['idGalerie'=>$galery->getIdGalerie()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('galeries/edit.html.twig', [
            'galery' => $galery,
            'form' => $form,
            'articles'=>$articles,
        ]);
    }
    #[Route('/affect/{idGalerie}', name: 'app_galeries_delete1', methods: ['POST','GET'])]
    public function delete1(Request $request, Galeries $galery,EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {   
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findBy(['idGalerie' => $galery]);
        dump($articles);
        $form = $this->createForm(DeleteType::class,['articles' => $articles]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            //$newGalerie = $form->get('idGalerie')->getData();
            foreach ($data['articles'] as $article){
              // $article->setIdGalerie($newGalerie);
                $entityManager->remove($galery);
               $entityManager->flush();
            
            }
            
            $flashy->success('Articles moved successfully!');
            return $this->redirectToRoute('app_galeries_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('galeries/affect.html.twig',['form'=>$form->createView()]);
    }
    #[Route('/{idGalerie}', name: 'app_galeries_delete', methods: ['POST'])]
    public function delete(Request $request, Galeries $galery, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$galery->getIdGalerie(), $request->request->get('_token'))) {
            $entityManager->remove($galery);
            $entityManager->flush();
            $flashy->success('Gallery successfully deleted', 5000);
        }

        return $this->redirectToRoute('app_galeries_index', [], Response::HTTP_SEE_OTHER);
    }
}
