<?php

use App\ClassA;

require __DIR__ . '\..\vendor\autoload.php';
// require 'C:\wamp64\www\14-Online-Advisor\src\ClassA.php';

echo 'Ici index.php<br>';

$class1 = new ClassA();
$class1->test();

echo 'Ici index.php<br>';