<?php

abstract class Entity {
    protected string $id;
    protected string $name;

    public function __construct(string $id, string $name) {
        $this->setID($id);
        $this->setName($name);
    }

    protected function setID(string $id): void {
        $trimmed = trim($id);
        if ($trimmed === '') {
            throw new \InvalidArgumentException("ID не может быть пустым"); 
        }
        $this->id = $trimmed; 
    }

    public function getID(): string {
        return $this->id; 
    }

    protected function setName(string $name): void {
        $trimmed = trim($name);
        if ($trimmed === '') {
            throw new \InvalidArgumentException("Именование не может быть пустым"); 
        }
        $this->name = $trimmed; 
    }

    public function getName(): string {
        return $this->name; 
    }
}