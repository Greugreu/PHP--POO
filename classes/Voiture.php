<?php

class Voiture
{
    private $marque;
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

    public function calculerEnerigeCinetique()
    {
        return 0.5 * $this->masse * $this->vitesse ** 2;
    }

    public function getMarque()
    {
      return $this->marque;
    }

    public function setMarque($m) : void
    {
        $this->marque = $m;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return array
     */
    public function getDimensions(): array
    {
        return $this->dimensions;
    }

    /**
     * @param array $dimensions
     */
    public function setDimensions(array $dimensions): void
    {
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getMasse()
    {
        return $this->masse;
    }

    /**
     * @param mixed $masse
     */
    public function setMasse($masse): void
    {
        $this->masse = $masse;
    }

    /**
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     */
    public function setVitesse(int $vitesse): void
    {
        $this->vitesse = $vitesse;
    }


}
