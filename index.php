<?php
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Categoria.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Gioco.php';
require_once __DIR__ . '/classes/Cuccia.php';


$categoriaCani = new Categoria('Cani');
$categoriaGatti = new Categoria('Gatti');

$ciboCani = new Cibo('Croccantini', 23, 'https://invirtus.it/wp-content/uploads/2021/04/A145A.jpg', $categoriaCani, 'Cibo', 'Carne di pollo, riso');
$giocoGatti = new Gioco('Pallina', 5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaZ3mx9MPJhT0yW-LBVAiBvxHflLbLr1BmOhr3uawBmqjdLBItRrW0dic&s', $categoriaGatti, 'Gioco', 'Plastica');
$cucciaCani = new Cuccia('Cuccia grande', 50, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQcqEDE8jq4eyyXNrUbcpl3J4kMqpj1alb9Kldi6t43N5sTtx-sp2k7rLoMKtja2XXhlW4hscfAgG8jlLNtcxbCLhBrC7Kf2LsuO98K8dKqO8vPFw84J33Vrzk', $categoriaCani, 'Cuccia', '80x100cm');

$ciboCani->displayProduct();
$giocoGatti->displayProduct();
$cucciaCani->displayProduct();
