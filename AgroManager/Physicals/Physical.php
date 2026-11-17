<?php

require_once __DIR__ . '/../Entity.php';

abstract class Physical extends Entity
{
    protected float $weight;

    public function __construct(string $id, string $name, float $weight)
    {
        parent::__construct($id, $name);

        if ($weight < 0) {
            throw new InvalidArgumentException('Вес не может быть отрицательным');
        }

        $this->weight = $weight;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }
}
