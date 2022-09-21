<?php

require '../vendor/autoload.php';
require '../src/Wcs/Hello.php';

use Wcs\Hello;

$hello = new Hello;

echo $hello->talk() . PHP_EOL;
