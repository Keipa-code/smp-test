<?php

use App\Entity\User;

class UserMapper
{
    public static function map(User $user, UserItem $userItem)
    {
        return $userItem
            ->setId($user->getId())
            ->setFirstName($user->getFirstName());
    }
}