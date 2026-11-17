<?php

require_once __DIR__ . '/../Entity.php';

abstract class Biological extends Entity
{
    protected float $health = 100.0;

    public function getHealth(): float
    {
        return $this->health;
    }

    public function changeHealth(float $delta): void
    {
        $this->health = min(100.0, max(0.0, $this->health + $delta));

        if ($this->health === 0.0) {
            $this->handleDeath();
        }
    }

    abstract protected function handleDeath(): void;
}
