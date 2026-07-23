<?php

namespace source\Models\User;

class Type {
    private ?int $id;
    private ?string $typeName;
    private ?string $description;

    public function __construct(
        ?int $id = null,
        ?string $typeName = null,
        ?string $description = null
    )
    {
        $this->id = $id;
        $this->typeName = $typeName;
        $this->description = $description;
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getTypeName(): ?string {
        return $this->typeName;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    // Setters
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setTypeName(?string $typeName): void {
        $this->typeName = $typeName;
    }

    public function setDescription(?string $description): void {
        $this->description = $description;
    }

    public function show() : string {
        return "
            <div>
                <h1>Tipos de Usuários</h1>
                <p>ID: {$this->id}</p>
                <p>Nome: {$this->typeName}</p>
                <p>Descrição: {$this->description}</p>
            </div>
        ";       
    }
}
