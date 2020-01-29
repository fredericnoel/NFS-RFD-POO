<?php

class Voiture
{
  public $nbrRoues;
  public $nbrPlaces;
  public $masse;
  public $vitesse = 0;
  public $couleur;

  public function __construct(float $m, string $c)
  {
    $this->masse = abs($m);
    $this->couleur = $c;
  }

  public function calculerEnergieCinetique()
  {
    return 0.5 * $this->masse * $this->vitesse ** 2;
  }

  public function afficherMessageDebile()
  {
    echo "Je roule en caisse";
  }
}
