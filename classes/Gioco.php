<?php
class Gioco extends Prodotto
{
  public $materiale;

  public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $tipo, $materiale)
  {
    parent::__construct($titolo, $prezzo, $immagine, $categoria, $tipo);
    $this->materiale = $materiale;
  }

  public function displayProduct()
  {
    parent::displayProduct();
    echo "<p>Materiale: {$this->materiale}</p>";
  }
}
