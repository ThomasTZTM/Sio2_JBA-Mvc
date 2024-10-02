<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\Orage;

$orage1 = new Orage(9);
$orage1->distanceOrage();