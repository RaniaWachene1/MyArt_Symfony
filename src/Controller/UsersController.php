<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Commentaire;
use App\Entity\Panier;
use App\Entity\Rating;
use App\Entity\Reclam;
use App\Entity\Reponse;
use App\Entity\Users;
use App\Form\UsersType;
use App\Form\UsersTypeEdit;
use App\Form\UsersTypeEditadmin;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

#[Route('/users')]
class UsersController extends AbstractController
{
#[Route('/', name: 'app_users_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,PaginatorInterface $paginator, Request $request): Response
    {    $donnees = $entityManager
        ->getRepository(Users::class)
        ->findAll();
        $users = $paginator->paginate(
            $donnees,// Requête contenant les données à paginer (ici les articles)
            $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3  // Nombre de résultats par page
        );
        $userByadress = [];
        foreach ($users as $user) {
            $lieu = $user->getAdresse();
            if ( isset($userByadress[$lieu]) ) {
                $userByadress[$lieu] += 1;
            } else {
                $userByadress[$lieu] = 1;
            }
        }
        $markers = [];
        foreach ($users as $user) {

            $marker = [
                'lat' => $user->getLatitude(),
                'lng' => $user->getLongitude(),
                'popupContent' => $user->getAdresse(), // La description de l'accident pour afficher dans la fenêtre contextuelle du marqueur.
            ];
            $markers[] = $marker;
        }
        return $this->render('users/index.html.twig', [
            'users' => $users,
            'markers' => $markers,
            'userbyadress' => $userByadress,
        ]);
    }


    #[Route('/new2', name: 'app_users_new2', methods: ['GET', 'POST'])]
    public function newForAdmin(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordencoder, FlashyNotifier $flashy): Response
    {
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {
            if ( $user->getAdresse() == "Tunis" ) {
                $user->setLatitude(36.8008);
                $user->setLongitude(10.1800);
            } else if ( $user->getAdresse() == "Sfax" ) {
                $user->setLatitude(34.7400);
                $user->setLongitude(10.7600);
            } else if ( $user->getAdresse() == "Sousse" ) {
                $user->setLatitude(35.8333);
                $user->setLongitude(10.6333);
            } else if ( $user->getAdresse() == "Kairouan" ) {
                $user->setLatitude(35.6833);
                $user->setLongitude(10.1000);
            } else if ( $user->getAdresse() == "Métouia" ) {
                $user->setLatitude(33.9600);
                $user->setLongitude(10.0000);
            } else if ( $user->getAdresse() == "Kebili" ) {
                $user->setLatitude(33.7050);
                $user->setLongitude(8.9650);
            } else if ( $user->getAdresse() == "Bizerte" ) {
                $user->setLatitude(37.2744);
                $user->setLongitude(9.8739);
            } else if ( $user->getAdresse() == "Sidi Bouzid" ) {
                $user->setLatitude(35.0381);
                $user->setLongitude(9.4858);
            } else if ( $user->getAdresse() == "Gabès" ) {
                $user->setLatitude(33.8814);
                $user->setLongitude(10.0983);
            } else if ( $user->getAdresse() == "Ariana" ) {
                $user->setLatitude(36.8625);
                $user->setLongitude(10.1956);
            } else {//Béja
                $user->setLatitude(36.7256);
                $user->setLongitude(9.1817);
            }
            $existingUser = $entityManager->getRepository(Users::class)->findOneBy([
                'email' => $user->getEmail()
            ]);
            if ( $user->getRole() == 'Artist' ) {
                $user->setRoles(["ROLE_ARTIST"]);
            } else {
                $user->setRoles(["ROLE_CLIENT"]);
            }
            $encoded = $passwordencoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);
            if ( $existingUser !== null ) {
                $flashy->error('There is an existing account with this email');
                return $this->redirectToRoute('app_users_new2');
            } else {
                $entityManager->persist($user);
                $entityManager->flush();
                $flashy->success('Account created');
                return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('users/new2.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    //register
    #[Route('/new', name: 'app_users_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordencoder, FlashyNotifier $flashy): Response
    {
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {
            if ( $user->getAdresse() == "Tunis" ) {
                $user->setLatitude(36.8008);
                $user->setLongitude(10.1800);
            } else if ( $user->getAdresse() == "Sfax" ) {
                $user->setLatitude(34.7400);
                $user->setLongitude(10.7600);
            } else if ( $user->getAdresse() == "Sousse" ) {
                $user->setLatitude(35.8333);
                $user->setLongitude(10.6333);
            } else if ( $user->getAdresse() == "Kairouan" ) {
                $user->setLatitude(35.6833);
                $user->setLongitude(10.1000);
            } else if ( $user->getAdresse() == "Métouia" ) {
                $user->setLatitude(33.9600);
                $user->setLongitude(10.0000);
            } else if ( $user->getAdresse() == "Kebili" ) {
                $user->setLatitude(33.7050);
                $user->setLongitude(8.9650);
            } else if ( $user->getAdresse() == "Bizerte" ) {
                $user->setLatitude(37.2744);
                $user->setLongitude(9.8739);
            } else if ( $user->getAdresse() == "Sidi Bouzid" ) {
                $user->setLatitude(35.0381);
                $user->setLongitude(9.4858);
            } else if ( $user->getAdresse() == "Gabès" ) {
                $user->setLatitude(33.8814);
                $user->setLongitude(10.0983);
            } else if ( $user->getAdresse() == "Ariana" ) {
                $user->setLatitude(36.8625);
                $user->setLongitude(10.1956);
            } else {//Béja
                $user->setLatitude(36.7256);
                $user->setLongitude(9.1817);
            }
            $existingUser = $entityManager->getRepository(Users::class)->findOneBy([
                'email' => $user->getEmail()

            ]);
            dump($existingUser);
            if ( $user->getRole() == 'Artist' ) {
                $user->setRoles(["ROLE_ARTIST"]);
            } else {
                $user->setRoles(["ROLE_CLIENT"]);
            }
            $encoded = $passwordencoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);
            if ( $existingUser !== null ) {
                $flashy->error('There is an existing account with this email');
                return $this->redirectToRoute('app_users_new');
            } else {
                $entityManager->persist($user);
                $entityManager->flush();

                $flashy->success('Account created');
                return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('users/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_users_show', methods: ['GET'])]
    public function show(Users $user): Response
    {

        return $this->render('users/show.html.twig', [
            'user' => $user,
        ]);
    }
//user ibadel compte mteouu
    #[Route('/{id}/edit', name: 'app_users_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Users $user, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordencoder, FlashyNotifier $flashy): Response
    {
        $panierUser=$entityManager->getRepository(Panier::class)->findOneBy(['idUser'=>$user]);
        $form = $this->createForm(UsersTypeEditadmin::class, $user);
        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {
            if ( $user->getAdresse() == "Tunis" ) {
                $user->setLatitude(36.8008);
                $user->setLongitude(10.1800);
            } else if ( $user->getAdresse() == "Sfax" ) {
                $user->setLatitude(34.7400);
                $user->setLongitude(10.7600);
            } else if ( $user->getAdresse() == "Sousse" ) {
                $user->setLatitude(35.8333);
                $user->setLongitude(10.6333);
            } else if ( $user->getAdresse() == "Kairouan" ) {
                $user->setLatitude(35.6833);
                $user->setLongitude(10.1000);
            } else if ( $user->getAdresse() == "Métouia" ) {
                $user->setLatitude(33.9600);
                $user->setLongitude(10.0000);
            } else if ( $user->getAdresse() == "Kebili" ) {
                $user->setLatitude(33.7050);
                $user->setLongitude(8.9650);
            } else if ( $user->getAdresse() == "Bizerte" ) {
                $user->setLatitude(37.2744);
                $user->setLongitude(9.8739);
            } else if ( $user->getAdresse() == "Sidi Bouzid" ) {
                $user->setLatitude(35.0381);
                $user->setLongitude(9.4858);
            } else if ( $user->getAdresse() == "Gabès" ) {
                $user->setLatitude(33.8814);
                $user->setLongitude(10.0983);
            } else if ( $user->getAdresse() == "Ariana" ) {
                $user->setLatitude(36.8625);
                $user->setLongitude(10.1956);
            } else {//Béja
                $user->setLatitude(36.7256);
                $user->setLongitude(9.1817);
            }
            $encoded = $passwordencoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);
            $entityManager->flush();
            $flashy->success('Account updated');
            return $this->redirectToRoute('app_test', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('users/edit.html.twig', [
            'user' => $user,
            'form' => $form,
            'cart'=>$panierUser,
        ]);
    }
    //admin updates user's account
    #[Route('edit/{id}/edit2', name: 'app_users_edit2', methods: ['GET', 'POST'])]
    public function editForAdmin(Request $request, Users $user, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordencoder, FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(UsersTypeEdit::class, $user);
        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ) {
            if ( $user->getAdresse() == "Tunis" ) {
                $user->setLatitude(36.8008);
                $user->setLongitude(10.1800);
            } else if ( $user->getAdresse() == "Sfax" ) {
                $user->setLatitude(34.7400);
                $user->setLongitude(10.7600);
            } else if ( $user->getAdresse() == "Sousse" ) {
                $user->setLatitude(35.8333);
                $user->setLongitude(10.6333);
            } else if ( $user->getAdresse() == "Kairouan" ) {
                $user->setLatitude(35.6833);
                $user->setLongitude(10.1000);
            } else if ( $user->getAdresse() == "Métouia" ) {
                $user->setLatitude(33.9600);
                $user->setLongitude(10.0000);
            } else if ( $user->getAdresse() == "Kebili" ) {
                $user->setLatitude(33.7050);
                $user->setLongitude(8.9650);
            } else if ( $user->getAdresse() == "Bizerte" ) {
                $user->setLatitude(37.2744);
                $user->setLongitude(9.8739);
            } else if ( $user->getAdresse() == "Sidi Bouzid" ) {
                $user->setLatitude(35.0381);
                $user->setLongitude(9.4858);
            } else if ( $user->getAdresse() == "Gabès" ) {
                $user->setLatitude(33.8814);
                $user->setLongitude(10.0983);
            } else if ( $user->getAdresse() == "Ariana" ) {
                $user->setLatitude(36.8625);
                $user->setLongitude(10.1956);
            } else {//Béja
                $user->setLatitude(36.7256);
                $user->setLongitude(9.1817);
            }
            $encoded = $passwordencoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);
            $entityManager->flush();
            $flashy->success('Account updated');
            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);

        }
        return $this->renderForm('users/edit2.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    //admin updates his account
    #[Route('{id}/edit3', name: 'app_users_edit3', methods: ['GET', 'POST'])]
    public function editAdmin(Request $request, Users $user, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordencoder, FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(UsersTypeEditadmin::class, $user);
        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {
            if ( $user->getAdresse() == "Tunis" ) {
                $user->setLatitude(36.8008);
                $user->setLongitude(10.1800);
            } else if ( $user->getAdresse() == "Sfax" ) {
                $user->setLatitude(34.7400);
                $user->setLongitude(10.7600);
            } else if ( $user->getAdresse() == "Sousse" ) {
                $user->setLatitude(35.8333);
                $user->setLongitude(10.6333);
            } else if ( $user->getAdresse() == "Kairouan" ) {
                $user->setLatitude(35.6833);
                $user->setLongitude(10.1000);
            } else if ( $user->getAdresse() == "Métouia" ) {
                $user->setLatitude(33.9600);
                $user->setLongitude(10.0000);
            } else if ( $user->getAdresse() == "Kebili" ) {
                $user->setLatitude(33.7050);
                $user->setLongitude(8.9650);
            } else if ( $user->getAdresse() == "Bizerte" ) {
                $user->setLatitude(37.2744);
                $user->setLongitude(9.8739);
            } else if ( $user->getAdresse() == "Sidi Bouzid" ) {
                $user->setLatitude(35.0381);
                $user->setLongitude(9.4858);
            } else if ( $user->getAdresse() == "Gabès" ) {
                $user->setLatitude(33.8814);
                $user->setLongitude(10.0983);
            } else if ( $user->getAdresse() == "Ariana" ) {
                $user->setLatitude(36.8625);
                $user->setLongitude(10.1956);
            } else {//Béja
                $user->setLatitude(36.7256);
                $user->setLongitude(9.1817);
            }
            $encoded = $passwordencoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);
            $entityManager->flush();
            $flashy->success('Account updated');
            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);

        }

        return $this->renderForm('users/edit3.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }




    #[Route('/{id}', name: 'app_users_delete', methods: ['POST'])]
    public function delete(Request $request, Users $user, EntityManagerInterface $entityManager, FlashyNotifier $flashy): Response
    {
        if ( $this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token')) ) {
            $rates=$entityManager->getRepository(Rating::class)->findByIdUser($user);
            $comments=$entityManager->getRepository(Commentaire::class)->findByIdUser($user);
            $reclams=$entityManager->getRepository(Reclam::class)->findByIdUser($user);
            foreach ($rates as $rate){
                $entityManager->remove($rate);
            }
            foreach ($reclams as $reclam){
                $reponse=$entityManager->getRepository(Reponse::class)->findByIdrec($reclam);
                foreach ($reponse as $r){
                    $entityManager->remove($r);
                }
                $entityManager->remove($reclam);
            }
            foreach ($comments as $comment){
                $entityManager->remove($comment);
            }

            $entityManager->remove($user);
            $entityManager->flush();
            $flashy->success('User successfully deleted', 5000);
        }

        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/block', name: 'app_users_block', methods: ['POST','GET'])]
    public function block(Request $request,Users $user,EntityManagerInterface $entityManager,FlashyNotifier $flashyNotifier):Response
    {
        $user->setBlock('Blocked');
        $entityManager->flush();
        $flashyNotifier->success('User Blocked');
        return $this->redirectToRoute('app_users_index',[],Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/unblock', name: 'app_users_unblock', methods: ['POST','GET'])]
    public function unblock(Request $request,Users $user,EntityManagerInterface $entityManager,FlashyNotifier $flashyNotifier):Response
    {
        $user->setBlock('unBlocked');
        $entityManager->flush();
        $flashyNotifier->success('User unBlocked');
        return $this->redirectToRoute('app_users_index',[],Response::HTTP_SEE_OTHER);
    }


}
