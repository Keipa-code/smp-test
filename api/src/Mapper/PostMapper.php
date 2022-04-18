<?php

use App\Entity\Post;

class PostMapper
{
    public static function map(Post $post, PostItem $model): PostItem
    {
        return $model
            ->setText($post->getText());
    }
}