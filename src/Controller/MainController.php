<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{


    #[Route('/')]
    public function homepage(): Response
    {
        $myShip = [
            'name' => 'USS LeafyCruiser(NSS-0001)',
            'class' => 'Garden',
            'Captian' => 'Tu Tu Tung Sahur',
            'status' => 'Under Construction',
        ];

        $starshipCount = 400;

        return $this->render('main/homepage.html.twig', [
            'starshipCount' => $starshipCount
        ]);
    }
}
