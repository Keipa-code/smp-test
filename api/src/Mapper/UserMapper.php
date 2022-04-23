<?php

namespace App\Mapper;

use App\Entity\User;
use App\Model\UserItem;

class UserMapper
{
    public static function map(User $user, UserItem $userItem): UserItem
    {
        return $userItem
            ->setId($user->getId())
            ->setFirstName($user->getFirstName());
    }
}