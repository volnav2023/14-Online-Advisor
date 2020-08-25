<?php

use App\User;
use App\Dbase;

require __DIR__ . '\..\vendor\autoload.php';
// require 'C:\wamp64\www\14-Online-Advisor\src\User.php';

echo 'Ici index.php<br>';

$class1 = new User();
$class1->test();

echo 'Ici index.php<br>';

$dbase1 = new Dbase();
$dbase1->open('localhost', '14-online-advisor', 'root','');
$dbase1->query();
$dbase2 = new Dbase();
$dbase2->open('localhost', '14-one-advisor', 'root','', 1);
$dbase1->query();
$dbase2->query();
$dbase1->conn;
