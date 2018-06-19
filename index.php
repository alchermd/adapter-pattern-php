<?php

require 'vendor/autoload.php';

$person = new Acme\Person;

// A person can read a paperback just fine.
$book = new Acme\Book;
$person->read($book);

// However, the `read` method needs an object that implements
// the Acme\Interfaces\Readable interface. We solve this by using
// an adapter for our Kindle device.
$kindle = new Acme\Adapters\KindleAdapter(new Acme\Kindle);

// We can then read the Kindle the same way as we do the paperback.
$person->read($kindle);
