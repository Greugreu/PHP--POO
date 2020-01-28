<?php

class Voiture
{
    public $marque;
    public $model;
    public $couleur;
    public $dimensions = [0, 0, 0];
    public $masse;
    public $vitesse = 0;

    public function afficherMessage() {
        echo 'Je suis Michel';
    }

    public function __construct($mar, $mod, $cou, $dim, $mas)
    {
        $this->marque = $mar;
        $this->model = $mod;
        $this->couleur = $cou;
        $this->dimensions = $dim;
        $this->masse = $mas;
    }
}
