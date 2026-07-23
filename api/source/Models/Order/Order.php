<?php

namespace source\Models\Order;

use source\Models\Order\Customer;
use source\Models\Order\Status;
use source\Models\Order\OrderItem;

class Order {
    private ?int $id;
    private ?Customer $customer;
    private ?Status $status;
    private ?array $items;

    // Construtor
    public function __construct(?int $id = null, ?Customer $customer = null, ?Status $status = null) {
        $this->id = $id;
        $this->customer = $customer;
        $this->status = $status;
        $this->items = [];
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

    public function getItems(): ?array
    {
        return $this->items;
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


    public function addItem(OrderItem $item): void
    {
        $this->items[] = $item;
    }

    public function show(): string
    {
        $items = "";

        foreach ($this->items as $item) {
            $items .= "
                Produto: {$item->getProduct()->getName()} <br>
                Quantidade: {$item->getQuantity()} <br>
                -------------------------<br>
            ";
        }

        return "
            <h2>Encomenda {$this->id}</h2>

            Cliente: {$this->customer->getName()} <br>
            Status: {$this->status->getStatus()} <br>

            <h3>Itens</h3>

            {$items}
        ";
    }
}