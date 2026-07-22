<?php

namespace source\Models\Order;

class Customer {
    private ?int $id;
    private ?string $name;
    private ?string $phone;
    private ?string $address;

    public function __construct(
        ?int $id = null,
        ?string $name = null,
        ?string $phone = null,
        ?string $address = null
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    // Setters
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }
}
