<?php

namespace App\Model;

class UserResponse
{
    private UserItem $item;

    public function __construct(UserItem $item)
    {
        $this->item = $item;
    }

    public function getItem(): UserItem
    {
        return $this->item;
    }


}