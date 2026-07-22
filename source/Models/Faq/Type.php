<?php

namespace source\Models\Faq;

class Type
{
    private ?int $id;
    private ?string $description;

    public function __construct(
        ?int $id = null, 
        ?string $descripition = null
    )
    {
        $this->id = $id;
        $this->description = $descripition;
    }

    public function getId() : ?int {
        return $this->id;
    }

    public function getDescription() : ?string {
        return $this->description;
    }

    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function setDescription(string $descripition) : void {
        $this->description = $descripition;
    }

    public function show() : ?string {
        return "Categoria: {$this->id} - Nome: {$this->description} <br>";
    }
}