<?php

namespace App\Entity;

class IMC {

    private float $taille;
    private int $poid;

    public function __construct(float $taille, int $poid) {
        $this->taille = $taille;
        $this->poid = $poid;
    }

    public function getTaille(): float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): void
    {
        $this->taille = $taille;
    }

    public function getPoid(): int
    {
        return $this->poid;
    }

    public function setPoid(int $poid): void
    {
        $this->poid = $poid;
    }

    public function calculIMC(): float
    {
        return $this->poid / ($this->taille * $this->taille);
    }
}
