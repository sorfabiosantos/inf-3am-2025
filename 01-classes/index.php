<?php

require __DIR__ . "/../source/Models/User.php";

use Source\Models\User;

echo "Olá, mundo da POO em PHP<br>";

$user = new User(12, "Fábio");
$user->login();
$user->setId(14);
var_dump($user, $user->getId());

$user = new User(12);
var_dump($user);

