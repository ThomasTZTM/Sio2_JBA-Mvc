<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\IMC;

$utilisateur1 = new IMC(1.94, 97);
$utilisateur1->calculIMC();