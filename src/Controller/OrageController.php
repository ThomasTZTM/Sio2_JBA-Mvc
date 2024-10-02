<?php

namespace App\Controller;

use App\Entity\Orage;

class OrageController
{
    public function distance() {
        $nvnombre = null;
        $reponse = null;

        // Vérifiez si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
            // Validez et assainissez l'entrée
            $nvnombre = intval($_POST['nombre']);
            $nvorage = new Orage($nvnombre);
            $distance = $nvorage->distanceOrage(); // Obtenez la distance
            $reponse = "L'orage est à $distance km de l'utilisateur"; // Formatez la réponse
        }

        // Incluez la vue, en passant la réponse
        require_once __DIR__ . '/../../views/orage/orage.php';
    }
}
