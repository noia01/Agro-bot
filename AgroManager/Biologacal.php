<?php

$dirName = __DIR__;
$entity = $dirName . "/../Entity.php";

if(file_exists($entity)){
    require_once($entity);
    echo "\nФайл |{$entity}| подключен!\n";
}else{
    echo "ошибка в форматировании адреса";
}

abstract class Biological extends Entity
{
    protected float $health = 100.0;

    public function getHealth(): float
    {
        return $this->health;
    }

    public function changeHealth(float $delta): void  
    {
    $this->health += $delta;
    $this->health = min(100.0, max(0.0, $this->health));
    if($this->health === 0.0)
        {
            echo "Объект с ID:{$this->id} умер.";
            $this->handleDeath();
        }
    }

    abstract protected function handleDeath(): void;

}