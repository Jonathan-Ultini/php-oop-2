<?php
require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto
{
  // Proprietà per memorizzare il materiale specifico per il prodotto Gioco
  public $materiale;

  // Costruttore della classe Gioco
  public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $tipo, $materiale)
  {
    // Richiamo al costruttore della classe genitore Prodotto
    // Inizializza le proprietà ereditate dalla classe Prodotto
    parent::__construct($titolo, $prezzo, $immagine, $categoria, $tipo);

    // Inizializza la proprietà materiale con il valore fornito
    $this->materiale = $materiale;
  }

  // Metodo per visualizzare le informazioni del prodotto
  public function displayProduct($ingredienti = null, $dimensioni = null, $materiale = null)
  {
    // Richiamo al metodo displayProduct della classe genitore Prodotto
    // Passa il materiale come parametro
    // Il metodo della classe genitore si occupa di stampare i dettagli di base del prodotto
    parent::displayProduct(null, null, $this->materiale);
  }
}
