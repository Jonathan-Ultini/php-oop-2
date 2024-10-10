<?php
class Prodotto
{
  public $titolo;
  public $prezzo;
  public $immagine;
  public $categoria;
  public $tipo;

  public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $tipo)
  {
    $this->titolo = $titolo;
    $this->prezzo = $prezzo;
    $this->immagine = $immagine;
    $this->categoria = $categoria;
    $this->tipo = $tipo;
  }

  public function displayProduct($ingredienti = null, $dimensioni = null, $materiale = null)
  {
    echo "
    <div class='card mb-4' style='text-align: center;'>
        <img src='{$this->immagine}' alt='{$this->titolo}' class='card-img-top' style='height:200px; width:auto; margin: 0 auto;'>
        <div class='card-body'>
            <h5 class='card-title'>{$this->titolo}</h5>
            <p class='card-text'>Prezzo: <strong>{$this->prezzo}€</strong></p>
            <p class='card-text'>Categoria: ", $this->categoria->displayCategory(), "</p>
            <p class='card-text'>Tipo: {$this->tipo}</p>";

    // Mostra se sono stati forniti
    $dettagli = [];
    if ($ingredienti) {
      $dettagli[] = "Ingredienti: {$ingredienti}";
    }
    if ($dimensioni) {
      $dettagli[] = "Dimensioni: {$dimensioni}";
    }
    if ($materiale) {
      $dettagli[] = "Materiale: {$materiale}";
    }

    // Mostriamo i dettagli se presenti
    foreach ($dettagli as $dettaglio) {
      echo "<p class='card-text'>{$dettaglio}</p>";
    }

    echo "
        </div>
    </div>
    ";
  }
}
