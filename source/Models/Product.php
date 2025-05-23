<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Core\Model;
use PDO;
use PDOException;

class Product extends Model
{
    protected $id;
    protected $idCategory;
    protected $name;
    protected $price;
    protected $deletedAt;

    public function __construct(
        int $id = null,
        int $idCategory = null,
        string $name = null,
        float $price = null,
        string $deletedAt = null
    )
    {
        $this->table = "products";
        $this->id = $id;
        $this->idCategory = $idCategory;
        $this->name = $name;
        $this->price = $price;
        $this->deletedAt = $deletedAt;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }

    public function setIdCategory(?int $idCategory): void
    {
        $this->idCategory = $idCategory;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?string $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

}