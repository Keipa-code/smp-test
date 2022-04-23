<?php

namespace App\Handler;

use App\Entity\User;
use App\Mapper\UserMapper;
use App\Model\UserItem;
use App\Repository\UserRepository;

class UserHandler
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function getUserById(string $id): UserItem
    {
        $user = $this->userRepository->getById($id);

        return UserMapper::map($user, new UserItem());
    }

    public function createUser(): UserItem
    {
        $user = new User();

        $this->userRepository->add($user);

        return UserMapper::map($user, new UserItem());
    }
}