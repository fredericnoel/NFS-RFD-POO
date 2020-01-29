<?php

class Voiture
{
  public $nbrRoues;
  private $nbrPlaces = 5;
  public $masse;
  public $vitesse = 0;
  public $couleur;

  public function __construct(float $m, string $c)
  {
    $this->masse = abs($m);
    $this->couleur = $c;
  }

  public function getNbrPlaces()
  {
    return $this->nbrPlaces;
  }

  public function setNbrPlaces($p)
  {
    $this->nbrPlaces = $p;
  }

  public function calculerEnergieCinetique()
  {
    return 0.5 * $this->masse * $this->vitesse ** 2;
  }

  public function afficherMessageDebile()
  {
    echo "Je roule en caisse";
  }

  public function __destruct()
  {
    echo "<h1>Je suis destroyed</h1>";
  }
}
