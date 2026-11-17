<?php

interface PoweredInterface
{
    public function powerOn(): void;

    public function powerOff(): void;

    public function isPowered(): bool;
}
