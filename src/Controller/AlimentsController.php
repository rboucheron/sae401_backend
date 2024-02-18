<?php

namespace App\Controller;

use App\Entity\Box;
use App\Repository\AlimentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

class AlimentsController extends AbstractController
{
    #[Route('/api/Aliments', name: 'Aliments')]
    public function getAllAliments(AlimentsRepository $AlimentsRepository, SerializerInterface $Serializer): JsonResponse
    {
        $AlimentsList =  $AlimentsRepository->findAll();
        $jsonAlimentsList = $Serializer->serialize($AlimentsList, 'json', []);
        return new JsonResponse(
            $jsonAlimentsList,
            Response::HTTP_OK,
            [],
            true
        );
    }

    #[Route('/api/Aliment/{id}', name: 'Aliments')]
    public function getAliment(int $id, AlimentsRepository $AlimentsRepository, SerializerInterface $Serializer): JsonResponse
    {

        $Aliment =  $AlimentsRepository->find($id);
        if ($Aliment) {

            $jsonAlimentList = $Serializer->serialize($Aliment, 'json', []);
            return new JsonResponse(
                $jsonAlimentList,
                Response::HTTP_OK,
                [],
                true
            );
        }
        return new JsonResponse(null, Response::HTTP_NOT_FOUND);
    }
}
