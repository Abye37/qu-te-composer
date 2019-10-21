<?php

require_once '../vendor/autoload.php';

use App\Wcs\Hello;//Déclaration name space
use HelloWorld\SayHello;

$hello = new Hello();
echo $hello->talk();

$helloWorld = new SayHello();
echo $helloWorld ->world();
