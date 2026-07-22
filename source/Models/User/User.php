<?php

namespace source\Models\User;

use source\Models\User\Type;

class User {
    private ?int $id;
    private ?Type $userType;
    private ?string $name;
    private ?string $email;
    private ?string $password;
    private ?string $photo;

    public function __construct(
        ?int $id = null,
        ?Type $userType = null,
        ?string $name = null,
        ?string $email = null,
        ?string $password = null,
        ?string $photo = null
    )
    {
        $this->id = $id;
        $this->userType = $userType;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->photo = $photo;
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getUserType(): ?Type {
        return $this->userType;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function getPhoto(): ?string {
        return $this->photo;
    }

    // Setters
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setUserType(?Type $userType): void {
        $this->userType = $userType;
    }

    public function setName(?string $name): void {
        $this->name = $name;
    }

    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    public function setPassword(?string $password): void {
        $this->password = $password;
    }

    public function setPhoto(?string $photo): void {
        $this->photo = $photo;
    }

    public function show() : string {
        return "
            <div>
                <p>-----Dados comuns de todo Usuário-----</p>
                <p>ID: {$this->id}</p>
                <p>Regra: {$this->userType->getTypeName()}</p>
                <p>Nome: {$this->name}</p>
                <p>Email: {$this->email}</p>
                <p>Senha: {$this->password}</p>
                <p>Foto: {$this->photo}</p>
            </div>
        ";
    }
}
