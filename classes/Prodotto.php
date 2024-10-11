<?php

require_once __DIR__ . '/../traits/ScontoUtente.php';
class Prodotto
{

  use ScontoUtente; // Usa il trait


  private $titolo;
  private $prezzo;
  private $immagine;
  private $categoria;
  private $tipo;

  // Getter e Setter per 'titolo'
  public function getTitolo()
  {
    return $this->titolo;
  }

  public function setTitolo($titolo)
  {
    $this->titolo = $titolo;
  }

  // Getter e Setter per 'prezzo'
  public function getPrezzo()
  {
    return $this->prezzo;
  }

  public function setPrezzo($prezzo)
  {
    $this->prezzo = $prezzo;
  }

  // Getter e Setter per 'immagine'
  public function getImmagine()
  {
    return $this->immagine;
  }

  public function setImmagine($immagine)
  {
    $this->immagine = $immagine;
  }

  // Getter e Setter per 'categoria'
  public function getCategoria()
  {
    return $this->categoria;
  }

  public function setCategoria(Categoria $categoria)
  {
    $this->categoria = $categoria;
  }

  // Getter e Setter per 'tipo'
  public function getTipo()
  {
    return $this->tipo;
  }

  public function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }

  // Costruttore della classe Prodotto
  public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $tipo)
  {
    // Inizializza le proprietà con i valori forniti
    $this->setTitolo($titolo);
    $this->setPrezzo($prezzo);
    $this->setImmagine($immagine);
    $this->setCategoria($categoria);
    $this->setTipo($tipo);
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
            <img src='{$this->getImmagine()}' alt='{$this->getTitolo()}' class='card-img-top' style='height:200px; width:auto; margin: 0 auto;'>
            <div class='card-body'>
                <h5 class='card-title'>{$this->getTitolo()}</h5>
                <p class='card-text'>Prezzo: <strong>{$this->calcolaSconto($this->getPrezzo())}€</strong></p>
                <p class='card-text'>Categoria: ", $this->getCategoria()->displayCategory(), "</p>
                <p class='card-text'>Tipo: {$this->getTipo()}</p>";

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
