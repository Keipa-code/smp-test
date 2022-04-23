<?php

namespace App\Model;

class PostResponse
{
    private PostItem $item;

    public function __construct(PostItem $item)
    {
        $this->item = $item;
    }

    public function getItem(): PostItem
    {
        return $this->item;
    }


}