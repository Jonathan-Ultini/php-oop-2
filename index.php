<?php
// Inclusione delle classi necessarie per il funzionamento del negozio online
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Categoria.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Gioco.php';
require_once __DIR__ . '/classes/Cuccia.php';

// Creazione delle categorie di prodotti
$categoriaCani = new Categoria('Cani');
$categoriaGatti = new Categoria('Gatti');

// Creazione di istanze di prodotti specifici
$ciboCani = new Cibo('Croccantini', 23, 'https://invirtus.it/wp-content/uploads/2021/04/A145A.jpg', $categoriaCani, 'Cibo', 'Carne di pollo, riso');
$giocoGatti = new Gioco('Pallina', 5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaZ3mx9MPJhT0yW-LBVAiBvxHflLbLr1BmOhr3uawBmqjdLBItRrW0dic&s', $categoriaGatti, 'Gioco', 'Plastica');
$cucciaCani = new Cuccia('Cuccia grande', 50, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQcqEDE8jq4eyyXNrUbcpl3J4kMqpj1alb9Kldi6t43N5sTtx-sp2k7rLoMKtja2XXhlW4hscfAgG8jlLNtcxbCLhBrC7Kf2LsuO98K8dKqO8vPFw84J33Vrzk', $categoriaCani, 'Cuccia', '80x100cm');

?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Negozio per Animali</title>
  <!-- Collegamento al CDN di Bootstrap per lo stile -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <?php
        // Visualizzazione dei prodotti tramite il metodo displayProduct di ciascun oggetto
        $ciboCani->displayProduct();  // Visualizza le informazioni del prodotto 'Cibo'
        $giocoGatti->displayProduct(); // Visualizza le informazioni del prodotto 'Gioco'
        $cucciaCani->displayProduct(); // Visualizza le informazioni del prodotto 'Cuccia'
        ?>
      </div>
    </div>
  </div>
  <!-- Collegamento al CDN di Bootstrap per le funzionalità JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>