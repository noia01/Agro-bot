<?php

require_once __DIR__ . '/../Entity.php';

abstract class Physical extends Entity
{
    protected float $weight;

    public protected(set) float $wear = 0.0 {
        set(float $value) {
            if ($value < 0.0 || $value > 100.0) {
                throw new OutOfRangeException('Износ должен быть от 0 до 100');
            }

            $this->wear = $value;
        }
    }

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

    public function setWear(float $value): void
    {
        $this->wear = $value;
    }
}
