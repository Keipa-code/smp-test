<?php

namespace App\Model;

use Symfony\Component\Uid\Uuid;

class UserItem
{
    private string $id;
    private string $firstName;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(Uuid $id): self
    {
        $this->id = $id->toRfc4122();

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

}