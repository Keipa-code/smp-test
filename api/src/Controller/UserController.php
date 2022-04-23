<?php

namespace App\Controller;

use App\Handler\UserHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    public function __construct(private UserHandler $userHandler)
    {
    }

    #[Route('/api/user/{id}', methods: ['GET'])]
    public function userById(string $id): Response
    {
        return $this->json($this->userHandler->getUserById($id));
    }

    #[Route('/api/user/', methods: ['POST'])]
    public function createUser(): Response
    {
        return $this->json($this->userHandler->createUser());
    }
}
