<?php

namespace source\Models\Order;

use source\Models\Order\Customer;
use source\Models\Order\Status;
use source\Models\Product\Product;

class Order {
    private ?int $id;
    private ?Customer $customer;
    private ?Status $status;
    private ?Product $product;

    // Construtor
    public function __construct(?int $id = null, ?Customer $customer = null, ?Status $status = null, ?Product $product = null) {
        $this->id = $id;
        $this->customer = $customer;
        $this->status = $status;
        $this->product = $product;
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getCustomer(): ?Customer {
        return $this->customer;
    }

    public function getStatus(): ?Status {
        return $this->status;
    }

    public function getProduct(): ?Product {
        return $this->product;
    }

    // Setters
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setCustomer(?Customer $customer): void {
        $this->customer = $customer;
    }

    public function setStatus(?Status $status): void {
        $this->status = $status;
    }

    public function setProduct(?Product $product): void {
        $this->product = $product;
    }

    public function show() : string {
        return "
            ----Pedido---- <br>
            Cliente: {$this->customer->getName()} <br>
            Produto: {$this->product->getName()} <br>
            Status: {$this->status->getName()} <br>
            -------------- <br>
        ";
    }
}
