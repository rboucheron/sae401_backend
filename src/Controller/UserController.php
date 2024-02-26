<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    #[Route('api/creatuser', name: 'CreatUser', methods: ['POST'])]
    public function CreatUser(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, UserPasswordHasherInterface $encoder): JsonResponse
    {
        $user = $serializer->deserialize($request->getContent(), User::class, 'json');
        $user->setPassword($encoder->hashPassword($user, $user->getPassword()));
        $em->persist($user);
        $em->flush();
        $jsonuser = $serializer->serialize($user, 'json', ['groups' => 'getUser']);

        return new JsonResponse($jsonuser, Response::HTTP_CREATED, [ $jsonuser ], true);
    }
}
