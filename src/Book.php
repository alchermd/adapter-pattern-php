<?php

namespace Acme;

use Acme\Interfaces\Readable;

/**
 * A traditional, paperback book.
 */
class Book implements Readable
{
    /**
     * Open the book.
     *
     * @return void
     */
    public function open(): void
    {
        var_dump('Opening the book.');
    }

    /**
     * Turn to the next page.
     *
     * @return void
     */
    public function turnPage(): void
    {
        var_dump('Turning the page of the book.');
    }
}
