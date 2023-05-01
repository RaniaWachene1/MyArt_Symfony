<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Reclam;
use App\Entity\Reponse;
use App\Entity\Typereclamation;
use App\Entity\Users;
use App\Form\ReclamType;
use App\Form\ReclamType2;
use Cassandra\Date;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Snipe\BanBuilder\CensorWords;
use MercurySeries\FlashyBundle\FlashyNotifier;

#[Route('/reclam')]
class ReclamController extends AbstractController
{
    public  function  triepardate(EntityManagerInterface  $entityManager)
    {
        $repo=$entityManager->getRepository(Reclam::class);
        return $repo->createQueryBuilder('r')
            ->orderBy('r.dater','DESC')
            ->getQuery()
            ->getResult();
    }
    #[Route('/', name: 'app_reclam_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,PaginatorInterface $paginator,Request $request): Response
    {
       /* $reclams = $entityManager
            ->getRepository(Reclam::class)
            ->findAll();*/
        $donnees = $this->triepardate($entityManager);
        $reclams=$paginator->paginate(
            $donnees,// Requête contenant les données à paginer (ici les articles)
            $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            2  // Nombre de résultats par page
        );

        return $this->render('reclam/index.html.twig', [
            'reclams' => $reclams,
        ]);
    }
    #[Route('/myclaims', name: 'app_reclam_index2', methods: ['GET'])]
    public function index2(EntityManagerInterface $entityManager): Response
    {   $user=$this->get('security.token_storage')->getToken()->getUser();
        $panierUser=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
        $reclams = $entityManager
            ->getRepository(Reclam::class)
            ->findByIdUser($user);
        return $this->render('reclam/indexFront.html.twig', [
            'reclams' => $reclams,
            'cart'=>$panierUser,
        ]);
    }
    #[Route('/new', name: 'app_reclam_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $reclam = new Reclam();
        $user=$this->get('security.token_storage')->getToken()->getUser();
        $panierUser=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
        $form = $this->createForm(ReclamType::class, $reclam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $censor = new CensorWords;
                $langs = array('fr', 'it', 'en-us', 'en-uk', 'de', 'es','tn');
                $badwords = $censor->setDictionary($langs);
                $censor->setReplaceChar("*");
                $string = $censor->censorString($reclam->getDescription());
                $reclam->setDescription($string['clean']);
            $reclam->setIdUser($user);
            $reclam->setDater(new \DateTime('now'));
            $reclam->setEtat('Unprocessed');
            $entityManager->persist($reclam);
            $entityManager->flush();
            $flashy->success('Claim sent successfully','http://your-awesome-link.com');
            return $this->redirectToRoute('app_reclam_index2', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclam/new.html.twig', [
            'reclam' => $reclam,
            'form' => $form,
            'cart'=>$panierUser,

        ]);
    }

    #[Route('/{idr}', name: 'app_reclam_show', methods: ['GET'])]
    public function show(Reclam $reclam,EntityManagerInterface $entityManager): Response
    {
        $response=$entityManager->getRepository(Reponse::class)->findByIdrec($reclam->getIdr());
        dump($reclam->getImage());
        return $this->render('reclam/show.html.twig', [
            'reclam' => $reclam,
            'reponses'=>$response,
        ]);
    }
    #[Route('/show2/{idr}', name: 'app_reclam_show2', methods: ['GET'])]
    public function show2(Reclam $reclam,EntityManagerInterface $entityManager): Response
    {     $user=$this->get('security.token_storage')->getToken()->getUser();
        $panierUser=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
        $response=$entityManager->getRepository(Reponse::class)->findByIdrec($reclam->getIdr());
        dump($reclam->getImage());
        return $this->render('reclam/show2.html.twig', [
            'reclam' => $reclam,
            'reponses'=>$response,
            'cart'=>$panierUser,
        ]);
    }
    #[Route('/satisfied/{idr}/{idrep}', name: 'app_reclam_satisfied', methods: ['GET','POST'])]
    public function satistied(Reclam $reclam,EntityManagerInterface $entityManager,$idrep):Response
    {
        $reponse=$entityManager->getRepository(Reponse::class)->find($idrep);
        $reponse->setEtat("Satisfied");
        $entityManager->flush();
        return $this->redirectToRoute('app_reclam_show2',['idr'=>$reclam->getIdr()],Response::HTTP_SEE_OTHER);
    }
    #[Route('/unsatisfied/{idr}/{idrep}', name: 'app_reclam_unsatisfied', methods: ['GET','POST'])]
    public function unsatistied(Reclam $reclam,EntityManagerInterface $entityManager,$idrep):Response
    {   $reponse=$entityManager->getRepository(Reponse::class)->find($idrep);
        $reponse->setEtat("Unsatisfied");
        $entityManager->flush();
        return $this->redirectToRoute('app_reclam_show2',['idr'=>$reclam->getIdr()],Response::HTTP_SEE_OTHER);
    }
    //client update his claim
    #[Route('/{idr}/edit2', name: 'app_reclam_edit2', methods: ['GET', 'POST'])]
    public function edit2(Request $request, Reclam $reclam, EntityManagerInterface $entityManager): Response
    {   $user=$this->get('security.token_storage')->getToken()->getUser();
        $panierUser=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
        $form = $this->createForm(ReclamType::class, $reclam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->flush();

            return $this->redirectToRoute('app_reclam_index2', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclam/edit2.html.twig', [
            'reclam' => $reclam,
            'form' => $form,
            'cart'=>$panierUser,
        ]);
    }
    //admin updates client claim
#[Route('/{idr}/edit', name: 'app_reclam_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclam $reclam, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ReclamType2::class, $reclam);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($reclam->getEtat() == "Handled") {
                $email = (new TemplatedEmail())
                    ->from(new Address('myartmyart08@gmail.com', 'MyArt'))
                    ->to($reclam->getIdUser()->getEmail())
                    ->subject('Return on your claim')
                    ->htmlTemplate('reclam/email.html.twig');
                $mailer->send($email);
                $entityManager->flush();
                return $this->redirectToRoute('app_reponse_new',['idr'=>$reclam->getIdr()]);
            }
        }
        return $this->renderForm('reclam/edit.html.twig', [
            'reclam' => $reclam,
            'form' => $form,
        ]);
    }
    #[Route('/{idr}/pdf', name: 'app_reclam_pdf')]
    public function pdf(Reclam $reclam): Response
    {

        $html = $this->renderView('reclam/pdf.html.twig', [
            'reclam'=>$reclam,

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
    #[Route('/{idr}', name: 'app_reclam_delete', methods: ['POST'])]
    public function delete(Request $request, Reclam $reclam, EntityManagerInterface $entityManager): Response
    {dump($reclam);
        if ($this->isCsrfTokenValid('delete'.$reclam->getIdr(), $request->request->get('_token'))) {
            //$reclam->setImage($reclam->getImage());
            dump($reclam);
            $entityManager->remove($reclam);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclam_index', [], Response::HTTP_SEE_OTHER);
    }




}
