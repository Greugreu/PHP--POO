<?php
require 'functions/debug.php';
require 'classes/Voiture.php';

$voiture1 = new Voiture();

debug($voiture1);

$voiture1->couleur = "Rouge";
$voiture1->masse = 1000;
$voiture1->modele = "R14";

$voiture2 = new Voiture('Tesla', 'RX11', 'Black', [2000,1500,800], 9000);
