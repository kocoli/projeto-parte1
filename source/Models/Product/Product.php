<?php

namespace source\Models\Product;

use source\Models\Product\Category;

class Product
{
    private ?int $id;
    private ?string $name;
    private ?Category $category;
    private ?float $price;
    private ?int $stock;

    public function __construct
    (
        ?int $id = null,
        ?string $name = null,
        ?Category $category = null,
        ?float $price = null,
        ?int $stock = null
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->stock = $stock;
    }

    //-----------------------------------

    public function getId() : ?int
    {
        return $this->id;
    }

    public function getName() : ?string
    {
        return $this->name;
    }

    public function getCategory() : ?Category
    {
        return $this->category;
    }

    public function getPrice() : ?float
    {
        return $this->price;
    }

    public function getStock() : ?int
    {
        return $this->stock;
    }

    //-----------------------------------

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function setCategory(Category $category) : void
    {
        $this->category = $category;
    }

    public function setPrice(float $price) : void
    {
        $this->price = $price;
    }

    public function setStock(?int $stock) : void
    {
        $this->stock = $stock;
    }


    //-----------------------------------

    public function discount(float $percentualDesconto) : ?float
    {
        $priceFinal = $this->price * (1 - ($percentualDesconto/100));
        return $this->price = round($priceFinal, 2);
    }

    public function show() : void
    {
        $numFormatado = number_format($this->price, 2, ",", ".");

        echo "
            ====PRODUTO==== <br>
            Nome: {$this->name}<br>
            Categoria: {$this->category->getName()}<br>
            Preço: R$ {$numFormatado} <br><br>
        ";
    }
}