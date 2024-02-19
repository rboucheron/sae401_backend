<?php

namespace App\Controller;

use App\Repository\BoxRepository;
use App\Entity\Box;
use App\Entity\Content;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Symfony\Component\Serializer\Normalizer\AbstractNormalizer as NormalizerAbstractNormalizer;

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

    #[Route('/api/box/{id}', name: 'app_box', methods: ['GET'])]
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

    #[Route('/api/box/{id}', name: 'deleteBox', methods: ['DELETE'])]
    public function deleteBox(Box $box, EntityManagerInterface $em): JsonResponse
    {
        $em->remove($box);
        $em->flush();
        dd($box->getAliments());
        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }

    #[Route('/api/addbox', name: "createBoxs", methods: ['POST'])]
    public function createbox(Request $request, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $box = $serializer->deserialize($request->getContent(), Box::class, 'json');
        $em->persist($box);
        $em->flush();
        $jsonbox = $serializer->serialize($box, 'json', ['groups' => 'getBoxs']);

        return new JsonResponse($jsonbox, Response::HTTP_CREATED, [], true);
    }

    #[Route('/api/box/{id}', name: "updatebox", methods: ['PUT'])]
    public function updatebox(Request $request, SerializerInterface $serializer, Box $currentbox, EntityManagerInterface $em): JsonResponse
    {
        $updatedbox = $serializer->deserialize(
            $request->getContent(),
            box::class,
            'json',
            [NormalizerAbstractNormalizer::OBJECT_TO_POPULATE => $currentbox]
        );
        $content = $request->toArray();
        $em->persist($updatedbox);
        $em->flush();
        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }
}
