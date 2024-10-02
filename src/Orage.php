<?php

namespace App;

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

    public function distanceOrage(): void{
        $resultat = ($this->secondeBruit)/3;
        echo "L'orage est à $resultat km de l'utilisateur";
    }
}
