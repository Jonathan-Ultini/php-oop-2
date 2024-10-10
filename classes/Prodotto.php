<?php

class Prodotto
{
  // Proprietà per memorizzare il titolo del prodotto
  public $titolo;

  // Proprietà per memorizzare il prezzo del prodotto
  public $prezzo;

  // Proprietà per memorizzare l'immagine del prodotto
  public $immagine;

  // Proprietà per memorizzare la categoria del prodotto
  public $categoria;

  // Proprietà per memorizzare il tipo del prodotto
  public $tipo;

  // Costruttore della classe Prodotto
  public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $tipo)
  {
    // Inizializza le proprietà con i valori forniti
    $this->titolo = $titolo;
    $this->prezzo = $prezzo;
    $this->immagine = $immagine;
    $this->categoria = $categoria;
    $this->tipo = $tipo;
  }

  /**
   * Metodo per visualizzare le informazioni del prodotto.
   *
   * Questo metodo genera un markup HTML per mostrare le informazioni relative al prodotto,
   * inclusi titolo, prezzo, categoria e tipo. Inoltre, può visualizzare dettagli aggiuntivi
   * come ingredienti, dimensioni e materiale, se forniti.
   *
   * @param string|null $ingredienti   Gli ingredienti del prodotto (se applicabile).
   * @param string|null $dimensioni    Le dimensioni del prodotto (se applicabile).
   * @param string|null $materiale     Il materiale del prodotto (se applicabile).
   */
  public function displayProduct($ingredienti = null, $dimensioni = null, $materiale = null)
  {
    // Inizio della struttura della card per il prodotto
    echo "
        <div class='card mb-4' style='text-align: center;'>
            <img src='{$this->immagine}' alt='{$this->titolo}' class='card-img-top' style='height:200px; width:auto; margin: 0 auto;'>
            <div class='card-body'>
                <h5 class='card-title'>{$this->titolo}</h5>
                <p class='card-text'>Prezzo: <strong>{$this->prezzo}€</strong></p>
                <p class='card-text'>Categoria: ", $this->categoria->displayCategory(), "</p>
                <p class='card-text'>Tipo: {$this->tipo}</p>";

    // Inizializza un array per raccogliere i dettagli aggiuntivi
    $dettagli = [];

    // Aggiunge ingredienti se forniti
    if ($ingredienti) {
      $dettagli[] = "Ingredienti: {$ingredienti}";
    }

    // Aggiunge dimensioni se fornite
    if ($dimensioni) {
      $dettagli[] = "Dimensioni: {$dimensioni}";
    }

    // Aggiunge materiale se fornito
    if ($materiale) {
      $dettagli[] = "Materiale: {$materiale}";
    }

    // Mostra i dettagli aggiuntivi se presenti
    foreach ($dettagli as $dettaglio) {
      echo "<p class='card-text'>{$dettaglio}</p>";
    }

    // Chiusura della struttura della card
    echo "
            </div>
        </div>
        ";
  }
}
