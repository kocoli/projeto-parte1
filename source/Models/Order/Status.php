<?php

namespace source\Models\Order;

class Status {
    private ?int $id;
    private ?string $statusName;

    public function __construct(
        ?int $id = null,
        ?string $statusName = null
    )
    {
        $this->id = $id;
        $this->statusName = $statusName;
    }

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->statusName;
    }

    // Setters
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setName(?string $statusName): void
    {
        $this->statusName = $statusName;
    }
}
