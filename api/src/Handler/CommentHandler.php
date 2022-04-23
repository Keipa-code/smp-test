<?php

namespace App\Handler;

use App\Entity\Comment;
use App\Mapper\PostMapper;
use App\Model\PostItem;
use App\Repository\CommentRepository;
use Doctrine\ORM\ORMException;

class CommentHandler
{
    public function __construct(
        private CommentRepository $commentRepository
    )
    {
    }

    public function getPostById(int $id): PostItem
    {
        $post = $this->postRepository->getById($id);

        return PostMapper::map($post, new PostItem());
    }

    /**
     * @throws ORMException
     */
    public function createComment(string $userId, string $text)
    {
        $comment = new Comment();
        $comment->setText($text);
        $this->commentRepository->add($comment, $userId);
    }
}