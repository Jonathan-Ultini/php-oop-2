<?php

class Cibo extends Prodotto
{
  // Proprietà per memorizzare gli ingredienti specifici per il prodotto Cibo
  public $ingredienti;

  // Costruttore della classe Cibo
  public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $tipo, $ingredienti)
  {
    // Richiamo al costruttore della classe genitore Prodotto
    parent::__construct($titolo, $prezzo, $immagine, $categoria, $tipo);
    // Inizializza la proprietà ingredienti
    $this->ingredienti = $ingredienti;
  }

  // Metodo per visualizzare le informazioni del prodotto
  public function displayProduct($ingredienti = null, $dimensioni = null, $materiale = null)
  {
    // Richiamo al metodo displayProduct della classe genitore Prodotto
    // Passa gli ingredienti come parametro
    // Il metodo della classe genitore si occupa di stampare i dettagli di base del prodotto
    parent::displayProduct($this->ingredienti);
  }
}
