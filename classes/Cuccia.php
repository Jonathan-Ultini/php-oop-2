<?php
class Cuccia extends Prodotto
{
  public $dimensioni;

  public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $tipo, $dimensioni)
  {
    parent::__construct($titolo, $prezzo, $immagine, $categoria, $tipo);
    $this->dimensioni = $dimensioni;
  }

  public function displayProduct()
  {
    parent::displayProduct();
    echo "<p>Dimensioni: {$this->dimensioni}</p>";
  }
}
