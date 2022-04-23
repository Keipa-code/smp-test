<?php

namespace App\Handler;

use App\Mapper\PostMapper;
use App\Model\PostItem;
use App\Repository\PostRepository;

class PostHandler
{
    public function __construct(
        private PostRepository $postRepository)
    {
    }

    public function getPostById(int $id): PostItem
    {
        $post = $this->postRepository->getById($id);

        return PostMapper::map($post, new PostItem());
    }

    public function getCommentsByPostId(int $id)
    {
        return $this->postRepository->getCommentsById($id);
    }
}