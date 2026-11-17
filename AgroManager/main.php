<?php

require_once __DIR__ . '/Biologicals/Biological.php';
require_once __DIR__ . '/Physicals/Equipments/Tractor.php';

$plant = new class('plant-1', 'Пшеница') extends Biological {
    protected function handleDeath(): void
    {
        echo "Растение {$this->getName()} погибло.\n";
    }
};

$tractor = new Tractor('tractor-1', 'Трактор', 3500.0);

echo "Биологический объект: {$plant->getName()}, здоровье: {$plant->getHealth()}\n";
$plant->changeHealth(-25.0);
echo "Здоровье после изменения: {$plant->getHealth()}\n";
echo "Физический объект: {$tractor->getName()}, вес: {$tractor->getWeight()} кг\n";
$tractor->powerOn();
$tractor->work(12.5);
echo "Трактор работает: " . ($tractor->isPowered() ? 'да' : 'нет') . ", износ: {$tractor->wear}%\n";
$tractor->powerOff();
