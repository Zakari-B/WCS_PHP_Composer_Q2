<?php

namespace Wcs;

class Hello
{
    public function __construct()
    {
    }

    public static function talk(string $name = null): string
    {
        return ($name != null) ? "Hello, $name !" : "Hello World !";
    }
}
