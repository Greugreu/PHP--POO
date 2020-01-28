<?php
require 'functions/debug.php';
require 'classes/Voiture.php';

$voiture1 = new Voiture("Lada", "Niva", "blanc", [2000, 1500, 800], 900);
$voiture2 = new Voiture("Nissan", "Cube", "violet", [2500, 1800, 1200], 1200);

echo $voiture1->getMarque();

echo '<br />';

$voiture1->vitesse = 25;
$voiture2->vitesse = 30;

echo $voiture2->calculerEnerigeCinetique();
