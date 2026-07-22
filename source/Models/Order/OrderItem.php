<?php

namespace source\Models\Order;

use source\Models\Product\Product;

class OrderItem {

    private ?int $id;
    private ?Product $product;
    private ?int $quantity;

    // Construtor
    public function __construct(?int $id = null, ?Product $product = null, ?int $quantity = null) {
        $this->id = $id;
        $this->product = $product;
        $this->quantity = $quantity;
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getProduct(): ?Product {
        return $this->product;
    }

    public function getQuantity(): ?int {
        return $this->quantity;
    }

    // Setters
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setProduct(?Product $product): void {
        $this->product = $product;
    }

    public function setQuantity(?int $quantity): void {
        $this->quantity = $quantity;
    }

    public function show() : string {
        return "
            <p>Item {$this->id} </p>
            <p>Produto: {$this->product->getName()} | Quantidade: {$this->quantity}</p>
            <p>Preço unidade: {$this->product->getPrice()}</p>
        ";
    }
}
