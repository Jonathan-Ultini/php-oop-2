<?php
require_once __DIR__ . '/Prodotto.php';

class Categoria
{
  // Proprietà per memorizzare il nome della categoria
  public $nome;

  // Costruttore della classe Categoria
  public function __construct($nome)
  {
    // Inizializza la proprietà nome con il valore fornito
    $this->nome = $nome;
  }

  // Metodo per visualizzare il nome della categoria
  public function displayCategory()
  {
    // Stampa il nome della categoria
    echo "$this->nome";
  }
}
