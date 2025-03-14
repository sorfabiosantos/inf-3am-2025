<?php

namespace Source\Models;

class User
{
    private $id;
    private $name;

    public function __construct (int $id = null, string $name = null)
    {
        //echo "ID = {$id} => Nome: {$name}";
        $this->id = $id;
        $this->name = $name;
    }

    public function getId ()
    {
        return $this->id;
    }

    public function setId (int $id)
    {
        $this->id = $id;
    }

    public function login () {
        echo "Olá, {$this->name}! Você está logado!";
    }
}