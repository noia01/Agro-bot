<?php

require_once __DIR__ . '/Biologicals/Biological.php';
require_once __DIR__ . '/Physicals/Physical.php';

$plant = new class('plant-1', 'Пшеница') extends Biological {
    protected function handleDeath(): void
    {
        echo "Растение {$this->getName()} погибло.\n";
    }
};

$tractor = new class('tractor-1', 'Трактор', 3500.0) extends Physical {};

echo "Биологический объект: {$plant->getName()}, здоровье: {$plant->getHealth()}\n";
$plant->changeHealth(-25.0);
echo "Здоровье после изменения: {$plant->getHealth()}\n";
echo "Физический объект: {$tractor->getName()}, вес: {$tractor->getWeight()} кг\n";
