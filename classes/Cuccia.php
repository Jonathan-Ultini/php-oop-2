<?php
require_once __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto
{
  // Proprietà per memorizzare le dimensioni specifiche per il prodotto Cuccia
  public $dimensioni;

  // Costruttore della classe Cuccia
  public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $tipo, $dimensioni)
  {
    // Richiamo al costruttore della classe genitore Prodotto
    // Inizializza le proprietà ereditate dalla classe Prodotto
    parent::__construct($titolo, $prezzo, $immagine, $categoria, $tipo);

    // Inizializza la proprietà dimensioni con il valore fornito
    $this->dimensioni = $dimensioni;
  }

  // Metodo per visualizzare le informazioni del prodotto
  public function displayProduct($ingredienti = null, $dimensioni = null, $materiale = null)
  {
    // Richiamo al metodo displayProduct della classe genitore Prodotto
    // Passa le dimensioni come parametro
    // Il metodo della classe genitore si occupa di stampare i dettagli di base del prodotto
    parent::displayProduct(null, $this->dimensioni, null);
  }
}
