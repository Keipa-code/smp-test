<?php

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;

class UserHandler
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function getUserById(int $id)
    {

    }

    public function createUser(): UserItem
    {
        $user = new User();

        $this->userRepository->add($user);

        return UserMapper::map($user, new UserItem());
    }
}