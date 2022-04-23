<?php

namespace App\Controller;

use App\Handler\CommentHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    public function __construct(private CommentHandler $postHandler)
    {
    }

    #[Route('/api/comment/', methods: ['POST'])]
    public function createComment(Request $request): Response
    {
        return $this->json($this->postHandler->getPostById($id));
    }
}
