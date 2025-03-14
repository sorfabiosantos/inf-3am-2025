<?php

require __DIR__ . "/../source/Models/User.php";
require __DIR__ . "/../source/Models/Faq/Question.php";
require __DIR__ . "/../source/Models/Faq/Type.php";

use Source\Models\User;
use Source\Models\Faq\Question;
use Source\Models\Faq\Type;

echo "Encapsulamento<br>";

$user = new User(12, name: "Fábio");

echo "O ID do usuário é: {$user->getId()} - nome {$user->getName()}<br>";

$user->setId(null);

var_dump($user);

$user->login();

$question = new Question();
$typeQuestion = new Type();

var_dump($question, $typeQuestion);