<?php

namespace App\Controller;

use PostHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    public function __construct(private PostHandler $postHandler)
    {
    }

    #[Route('/api/post/{id}', methods: ['GET'])]
    public function postById(int $id): Response
    {
        return $this->json($this->postHandler->getPostById($id));
    }
}
