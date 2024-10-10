<?php

class Cibo extends Prodotto
{
  public $ingredienti;

  public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $tipo, $ingredienti)
  {
    parent::__construct($titolo, $prezzo, $immagine, $categoria, $tipo);
    $this->ingredienti = $ingredienti;
  }

  public function displayProduct($ingredienti = null, $dimensioni = null, $materiale = null)
  {
    parent::displayProduct($this->ingredienti);
  }
}
