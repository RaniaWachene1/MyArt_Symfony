<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/back', name: 'app_test0')]
    public function index2(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/home', name: 'app_test')]
    public function index1(): Response
    {
        return $this->render('front.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/artist', name: 'app_test3')]
    public function indexartist(): Response
    {
        return $this->render('artist.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/cart', name: 'app-cart')]
    public function cart(): Response
    {
        return $this->render('shoping-cart.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
