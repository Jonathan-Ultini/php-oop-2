<?php

// Definizione di un'eccezione per la creazione del prodotto
class ProductCreationException extends Exception {}

// Creazione delle categorie di prodotti
$categoriaCani = new Categoria('Cani');
$categoriaGatti = new Categoria('Gatti');

// Creazione di istanze di prodotti specifici
try {
  $ciboCani = new Cibo('Croccantini', -23, 'https://invirtus.it/wp-content/uploads/2021/04/A145A.jpg', $categoriaCani, 'Cibo', 'Carne di pollo, riso');
} catch (Exception $e) {
  echo "<p style='color: red;'>Errore nella creazione di Cibo: " . $e->getMessage() . "</p>";
}

try {
  $giocoGatti = new Gioco('Pallina', 5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaZ3mx9MPJhT0yW-LBVAiBvxHflLbLr1BmOhr3uawBmqjdLBItRrW0dic&s', $categoriaGatti, 'Gioco', 'Plastica');
} catch (Exception $e) {
  echo "<p style='color: red;'>Errore nella creazione di Gioco: " . $e->getMessage() . "</p>";
}

try {
  $cucciaCani = new Cuccia('Cuccia grande', 50, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQcqEDE8jq4eyyXNrUbcpl3J4kMqpj1alb9Kldi6t43N5sTtx-sp2k7rLoMKtja2XXhlW4hscfAgG8jlLNtcxbCLhBrC7Kf2LsuO98K8dKqO8vPFw84J33Vrzk', $categoriaCani, 'Cuccia', '80x100cm');
} catch (Exception $e) {
  echo "<p style='color: red;'>Errore nella creazione di Cuccia: " . $e->getMessage() . "</p>";
}
