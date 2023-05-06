<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Reclam;
use App\Entity\Typereclamation;
use App\Entity\Users;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatsController extends AbstractController
{  public function findbyNbcomment(EntityManagerInterface $entityManager){
    $query = $entityManager->getRepository(Articles::class)->createQueryBuilder('article');
    $query
        ->select('article.nbcomment as nbcomment,article.titreArticle as titre,article.idArticle as id')
        ->groupBy('titre');
    return $query->getQuery()->getResult();
}
    #[Route('/stats/', name: 'app_stats')]
    public function stats(EntityManagerInterface $entityManager): Response
    {     $reclamations = $entityManager->getRepository(Reclam::class)->findAll();
        $typeReclamations = $entityManager->getRepository(Typereclamation::class)->findAll();

        $data = array();
        foreach ($typeReclamations as $typeReclamation) {
            $count = 0;
            foreach ($reclamations as $reclamation) {
                if ($reclamation->getIdtyper() == $typeReclamation) {
                    $count++;
                }
            }
            $data[] = array(
                'type' => $typeReclamation->getNom(),
                'count' => $count
            );
        }
        $userRepository=$entityManager->getRepository(Users::class);
        // Get the user counts by gender from the repository
        $maleCount = $userRepository->countByGender('Male');
        $femaleCount = $userRepository->countByGender('Female');

        // Create the chart data
        $chartData = [
            ['Gender', 'Count'],
            ['Male', $maleCount],
            ['Female', $femaleCount],
        ];

        // Create the chart object and set the data
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable($chartData);

        // Set the chart options
        //$pieChart->getOptions()->setTitle('User Gender Distribution');
        $pieChart->getOptions()->setPieHole(0.4);
        $pieChart->getOptions()->setWidth(500);
        $pieChart->getOptions()->setHeight(400);
////////////////////////////////////////////////////////////////////:statsByRole
        // Get the user counts by role from the repository
        $artistCount = $userRepository->countByRole('["ROLE_ARTIST"]');
        $clientCount = $userRepository->countByRole('["ROLE_CLIENT"]');

        // Create the chart data
        $chartData2 = [
            ['Role', 'Count'],
            ['Artist', $artistCount],
            ['Client', $clientCount],
        ];

        // Create the chart object and set the data
        $pieChart2 = new PieChart();
        $pieChart2->getData()->setArrayToDataTable($chartData2);
        $pieChart2->getOptions()->setWidth(500);
        $pieChart2->getOptions()->setHeight(400);
        // Set the chart options
        // $pieChart2->getOptions()->setTitle('User Role Distribution');

        $articles=$this->findbyNbcomment($entityManager);
        $nbcomment=[];
        $articleCount=[];
        foreach($articles as $article){
            $nbcomment[] = $article['nbcomment'];
            $articleCount[] = 'Article'.$article['id'];
        }
        return $this->render('stats/stats.html.twig', [
            'data' => json_encode($data),
            'chart' => $pieChart,
            'chart2'=>$pieChart2,
            'articleCount' => json_encode($articleCount),
            'nbcomment'=>json_encode($nbcomment),

        ]);

    }
    #[Route('/statsartist/', name: 'app_stats_artist')]
    public function statsartist(EntityManagerInterface $entityManager): Response
    {
        $articles=$this->findbyNbcomment($entityManager);
        $nbcomment=[];
        $articleCount=[];
        foreach($articles as $article){
            $nbcomment[] = $article['nbcomment'];
            $articleCount[] = 'Article'.$article['id'];
        }
        return $this->render('stats/statsartist.html.twig', [

            'articleCount' => json_encode($articleCount),
            'nbcomment'=>json_encode($nbcomment),

        ]);

    }+

}
