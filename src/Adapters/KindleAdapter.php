<?php

namespace Acme\Adapters;

use Acme\Interfaces\Readable;
use Acme\Kindle;

class KindleAdapter implements Readable
{
    /** @var Acme\Kindle */
    protected $kindle;

    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open(): void
    {
        $this->kindle->turnOn();
    }

    public function turnPage(): void
    {
        $this->kindle->pressNext();
    }
}
