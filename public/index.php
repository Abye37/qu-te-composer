<?php


require_once '../.gitignore/vendor/autoload.php';//redirection avec autoload

use App\Wcs\Hello;//Déclaration name space
use HelloWorld\SayHello;

$hello = new Hello();
echo $hello->talk();

$helloWorld = new SayHello();
echo $helloWorld ->world();
