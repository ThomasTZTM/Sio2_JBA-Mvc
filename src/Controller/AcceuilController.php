<?php

namespace App\Controller;
class AcceuilController
{
    // Méthode permettant de gérer la page d'accueil
    public function acceuil() {
        // Fait appel au modèle afin de récupérer les données dans la BDD
        // Pas besoin
        // Fait appel à la vue afin de renvoyé la page
        require_once __DIR__ . "/../../views/acceuil/acceuil.php";
    }
}