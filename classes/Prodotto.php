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

  public function displayProduct()
  {
    echo "
    <div class='product-card'>
        <img src='{$this->immagine}' alt='{$this->titolo}' style='height:100px; width:100px;'>
        <h3>{$this->titolo}</h3>
        <p>Prezzo: {$this->prezzo}€</p>
        <p>Categoria: ", $this->categoria->displayCategory();
    echo "</p>
        <p>Tipo: {$this->tipo}</p>
    </div>
    ";
  }
}
