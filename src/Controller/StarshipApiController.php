<?php

namespace App\Controller;



use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/api/starships')]
class StarshipApiController extends AbstractController
{
    #[Route('') ]
    public function getCollection(
        StarshipRepository $repository): Response
    {

        $starships = $repository->findAll();

        return $this->json($starships);
    }

    #[Route('/{id}', name: 'api.starship', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repository): Response
    {
        $starship = $repository->find($id);

        if (!$starship){
            throw $this->createNotFoundException("Starship not found");
        }

        return $this->json($starship);
    }
}