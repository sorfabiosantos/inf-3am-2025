<?php

namespace Source\Core;

abstract class Model
{
    protected $table;

    public function findAll ()
    {
        try {
            $sql = "SELECT * FROM {$this->table}";
            $stmt = Connect::getInstance()->query($sql);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Ops! {$e->getMessage()}";
        }
    }

    public function findById (int $id)
    {
        try {
            $sql = "SELECT * FROM {$this->table} WHERE id = $id";
            $stmt = Connect::getInstance()->query($sql);
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Ops! {$e->getMessage()}";
        }
    }
}