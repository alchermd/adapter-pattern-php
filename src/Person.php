<?php

namespace Acme;

use Acme\Interfaces\Readable;

/**
 * This is you, the bookworm!
 */
class Person
{
    /**
     * Read a paperback book.
     *
     * @param  Acme\Interfaces\Readable $book
     * @return void
     */
    public function read(Readable $book)
    {
        $book->open();
        $book->turnPage();
    }
}
