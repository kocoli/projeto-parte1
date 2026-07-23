<?php

namespace source\Models\Order;

class Status {
    private ?int $id;
    private ?string $status;

    public function __construct(
        ?int $id = null,
        ?string $status = null
    )
    {
        $this->id = $id;
        $this->status = $status;
    }

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    // Setters
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setName(?string $status): void
    {
        $this->status = $status;
    }
}
