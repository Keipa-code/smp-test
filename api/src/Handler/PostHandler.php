<?php

use App\Repository\PostRepository;

class PostHandler
{
    public function __construct(
        private PostRepository $postRepository)
    {
    }

    public function getPostById(int $id)
    {
        $post = $this->postRepository->getById($id);

        return PostMapper::map($post, new PostItem());
    }
}