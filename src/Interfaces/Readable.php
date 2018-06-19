<?php

namespace Acme\Interfaces;

interface Readable
{
    public function open(): void;

    public function turnpage(): void;
}
