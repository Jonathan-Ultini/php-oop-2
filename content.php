<?php

// Inclusione del trait
require_once __DIR__ . '/traits/ScontoUtente.php';

// Inclusione delle classi necessarie per il funzionamento del negozio online
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Categoria.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Gioco.php';
require_once __DIR__ . '/classes/Cuccia.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Negozio per Animali</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!-- Inclusione della navbar -->
  <?php include 'navbar.php'; ?>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <?php
        require_once __DIR__ . '/data/datiProdotti.php';

        // Visualizzazione dei prodotti tramite il metodo displayProduct di ciascun oggetto
        if (isset($ciboCani)) {
          $ciboCani->displayProduct();
        }
        if (isset($giocoGatti)) {
          $giocoGatti->displayProduct();
        }
        if (isset($cucciaCani)) {
          $cucciaCani->displayProduct();
        }
        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>