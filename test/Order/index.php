<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Order\Status;
use source\Models\Order\Customer;
use source\Models\Order\Order;
use source\Models\Product\Product;
use source\Models\Product\Category;

//cliente
$customer = new Customer(1, "Carolina Gavaski", "51 99999-9999", "Rua Alecrim dourado 993");
//var_dump($customer);
//status
$status = new Status(1, "Pendente");
//var_dump($status);
//categoria
$c = new Category(1, "vasos");
//var_dump($c);
//produto
$product = new Product(1, "Vaso de cerâmica", $c, 34.79);
//var_dump($product);

$order = new Order(1, $customer, $status, $product);
//var_dump($order);

echo $order->show();