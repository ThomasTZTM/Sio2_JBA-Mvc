<?php
namespace App\Entity;

class Orage
{
    private int $secondeBruit;

    public function __construct(int $secondeBruit){
        $this->secondeBruit = $secondeBruit;
    }

    public function getSecondeBruit(): int
    {
        return $this->secondeBruit;
    }

    public function setSecondeBruit(int $secondeBruit): void
    {
        $this->secondeBruit = $secondeBruit;
    }

    public function distanceOrage(): int {
        return $this->secondeBruit / 3;
    }
}

