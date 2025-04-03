<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\User;
use Source\Models\Faq\Question;

echo "<h1>Acessando BD com a PDO</h1>";

$user = new User();
var_dump($user->findById(2));
$users =  $user->findAll();
var_dump($users);

$question = new Question();
$questions = $question->findAll();
var_dump($questions);


/*//var_dump($connection);
$sql = "SELECT * FROM users";
$stmt = $connection->query($sql);
//var_dump($stmt);
$users = $stmt->fetchAll();
var_dump($users);

$sql = "SELECT * FROM questions";
$stmt = $connection->query($sql);
$questions = $stmt->fetchAll();
var_dump($questions);*/