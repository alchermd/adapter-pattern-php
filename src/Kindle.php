<?php

namespace Acme;

use Acme\Interfaces\EReader;

/**
 * Your favourite E-Reader.
 */
class Kindle implements EReader
{
    /**
     * Turn the Kindle on.
     *
     * @return void
     */
    public function turnOn(): void
    {
        var_dump('Powering device on.');
    }

    /**
     * Press the "next" button to turn the page.
     *
     * @return void
     */
    public function pressNext(): void
    {
        var_dump('Going to the next page.');
    }
}
