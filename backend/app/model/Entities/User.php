<?php

namespace App\model\Entities;

class User
{
    public function __construct (
        private string $name
    ) { }

    public function getName(): string
    {
        return $this->name;
    }
}