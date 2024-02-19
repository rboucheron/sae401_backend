<?php

namespace App\Controller;

use App\Entity\Aliments;
use App\Entity\Box;
use App\Repository\AlimentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface; 
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



    #[Route('/api/aliment/{id}', name: 'deleteAliment', methods: ['DELETE'])]
    public function deleteAliment(Aliments $Aliments, EntityManagerInterface $em): JsonResponse
    {
        $em->remove($Aliments);
        $em->flush();
        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
  
    }


    #[Route('/api/addaliment', name: "createaliment", methods: ['POST'])]
    public function createBook(Request $request, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $aliment = $serializer->deserialize($request->getContent(), Aliments::class, 'json');
        $em->persist($aliment);
        $em->flush();
        $jsonBook = $serializer->serialize($aliment, 'json', ['groups' => 'getAliments']);
        return new JsonResponse($jsonBook, Response::HTTP_CREATED, [], true);
    }
    
}
