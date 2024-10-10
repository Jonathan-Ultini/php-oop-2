<?php
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Categoria.php';

$categoriaCani = new Categoria('Cani');
$categoriaGatti = new Categoria('Gatti');

$product = new Prodotto('croccantini', 23, 'https://invirtus.it/wp-content/uploads/2021/04/A145A.jpg', $categoriaCani, 'pollo');

$product->displayProduct();
