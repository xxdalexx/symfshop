<?php

namespace App\Entity;

class Product
{
    public function __construct(
        protected string $name
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
}