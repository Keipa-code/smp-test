<?php

namespace App\Exception;

use RuntimeException;

class PostNotFoundException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('post not found');
    }
}