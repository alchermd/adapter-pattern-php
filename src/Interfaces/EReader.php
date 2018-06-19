<?php

namespace Acme\Interfaces;

interface EReader
{
    public function turnOn(): void;

    public function pressNext(): void;
}
