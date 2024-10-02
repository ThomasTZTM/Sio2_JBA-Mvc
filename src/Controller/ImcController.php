<?php

namespace App\Controller;

use App\Entity\IMC;

class ImcController
{
    public function calculer() {
        $taille = null;
        $poid = null;
        $reponse = null;

        // Vérifiez si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['taille']) && isset($_POST['poid'])) {
            // Validez et assainissez les entrées
            $taille = floatval($_POST['taille']);
            $poid = intval($_POST['poid']);
            $imc = new IMC($taille, $poid);
            $resultatIMC = $imc->calculIMC(); // Obtenez l'IMC
            $reponse = "L'IMC de l'utilisateur est de : " . number_format($resultatIMC, 2); // Formatez la réponse
        }

        // Incluez la vue, en passant la réponse
        require_once __DIR__ . '/../../views/imc/imc.php';
    }
}
