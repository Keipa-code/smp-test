<?php

namespace App\Mapper;

use App\Entity\Post;
use App\Model\PostItem;

class PostMapper
{
    public static function map(Post $post, PostItem $model): PostItem
    {
        return $model
            ->setText($post->getText());
    }
}