<?php
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Categoria.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Gioco.php';
require_once __DIR__ . '/classes/Cuccia.php';


$categoriaCani = new Categoria('Cani');
$categoriaGatti = new Categoria('Gatti');

$ciboCani = new Cibo('Croccantini', 23, 'https://invirtus.it/wp-content/uploads/2021/04/A145A.jpg', $categoriaCani, 'Sacchetto', 'Carne di pollo, riso');

// $product = new Prodotto('croccantini', 23, 'https://invirtus.it/wp-content/uploads/2021/04/A145A.jpg', $categoriaCani, 'pollo');

// $product->displayProduct();
$ciboCani->displayProduct();
