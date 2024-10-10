<?php
require_once __DIR__ . '/classes/Prodotto.php';
$product = new Prodotto('croccantini', 23, 'https://invirtus.it/wp-content/uploads/2021/04/A145A.jpg', 'cani', '2kg');

$product->displayCard();
