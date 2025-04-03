<?php

namespace Source\Models;

use FTP\Connection;
use Source\Core\Connect;
use Source\Models\Records\Address;
use PDO;
use PDOException;

class User
{
    protected $id;
    protected $idType;
    protected $name;
    protected $email;
    protected $password;
    protected $photo;
    protected $address;

    public function __construct(
        int $id = null,
        int $idType = null,
        string $name = null,
        string $email = null,
        string $password = null,
        string $photo = null,
        Address $address = null
    )
    {
        $this->id = $id;
        $this->idType = $idType;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->photo = $photo;
        $this->address = $address;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getIdType(): ?int
    {
        return $this->idType;
    }

    public function setIdType(?int $idType): void
    {
        $this->idType = $idType;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): void
    {
        $this->photo = $photo;
    }

    public function login () {
        echo "Olá, {$this->name}! Você está logado!";
    }

    public function findAll ()
    {

        try {
            $sql = "SELECT * FROM users";
            $stmt = Connect::getInstance()->query($sql);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Ops! {$e->getMessage()}";
        }

    }
}