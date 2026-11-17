<?php

require_once __DIR__ . '/../../Contracts/PoweredInterface.php';
require_once __DIR__ . '/../Physical.php';

abstract class Equipment extends Physical implements PoweredInterface
{
    private bool $powered = false;

    public function powerOn(): void
    {
        if ($this->wear >= 100.0) {
            throw new RuntimeException('Оборудование полностью изношено');
        }

        $this->powered = true;
    }

    public function powerOff(): void
    {
        $this->powered = false;
    }

    public function isPowered(): bool
    {
        return $this->powered;
    }
}
