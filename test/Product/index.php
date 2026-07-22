<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Product\Product;
use source\Models\Product\Category;

$c1 = new Category(1, "Roupa");
$c2 = new Category(2, "Enfeite de mesa");
$c3 = new Category(3, "Conjuntinho");
$c4 = new Category(4, "Pano de prato");

$p1 = new Product(1, "Cachecol", $c1, 25.78);
$p2 = new Product(2, "Quit 3 por 10", $c4, 10.0);
$p3 = new Product(3, "Tapete e encapa vaso", $c3, 70.5);
$p4 = new Product(4, "Trilho De Rosas", $c2, 55.89);

$p1->show();
$p2->show();
$p3->show();
$p4->show();