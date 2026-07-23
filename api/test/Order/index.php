<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Order\Customer;
use source\Models\Order\Order;
use source\Models\Order\OrderItem;
use source\Models\Order\Status;
use source\Models\Product\Category;
use source\Models\Product\Product;

// Cliente
$customer = new Customer( 1, "Carolina Gavaski", "(51) 99999-9999", "Rua Alecrim Dourado, 993");

// Status
$status = new Status( 1, "Pendente");

// Encomenda
$order = new Order( 1, $customer, $status);

// Itens da encomenda
$item1 = new OrderItem(
    1, 
    new Product(1, "Quadro: Vagalumes e estrelas", new Category(1, "aquarela")), 
    1
);

$item2 = new OrderItem(
    2,
    new Product(2, "Desenho à lápis", new Category(2, "retrato")),
    1
);

$item3 = new OrderItem(
    3,
    new Product(3, "Pintura em caneca", new Category(3, "Pintura")),
    6
);

// Adicionando os itens
$order->addItem($item1);
$order->addItem($item2);
$order->addItem($item3);

// Exibindo
echo $order->show();