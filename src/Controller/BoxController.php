<?php

namespace App\Controller;

use App\Repository\BoxRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class BoxController extends AbstractController
{
    #[Route('/api/boxs', name: 'boxs')]
    public function getAllBoxs(BoxRepository $BoxRepository, SerializerInterface $Serializer): JsonResponse
    {
        $boxList =  $BoxRepository->findAll();
        $jsonBoxList = $Serializer->serialize($boxList, 'json', ['groups' => 'getAllBoxs']);

   
    
        return new JsonResponse(
            $jsonBoxList,
            Response::HTTP_OK,
            [],
            true
        );
    }

    #[Route('/api/box/{id}', name: 'app_box')]
    public function getBox(int $id, BoxRepository $BoxRepository, SerializerInterface $Serializer): JsonResponse
    {
        $box =  $BoxRepository->find($id);
        if ($box) {
       
            $jsonBoxList = $Serializer->serialize($box, 'json', ['groups' => 'getAllBoxs']);
            return new JsonResponse(
                $jsonBoxList,
                Response::HTTP_OK,
                [],
                true
            );
        }
        return new JsonResponse(null, Response::HTTP_NOT_FOUND);
    }
}
