<?php

use Symfony\Component\Uid\Uuid;

class PostItem
{
    private int $id;
    private string $text;

    public function getId(): int
    {
        return $this->id;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

}