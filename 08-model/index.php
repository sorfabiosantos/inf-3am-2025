<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\User;
use Source\Models\Faq\Question;

echo "<h2>Instanciando um user Vazio</h2>";
$user = new User();
var_dump($user);

echo "<h2>Evocando o método findAll()</h2>";
//var_dump($user->findAll());

$user->findById(6);
var_dump($user);

// Alterando as informações do User
$user->setName("Roberto Carlos Cunha Santos");
$user->setPassword("987654345678");
var_dump($user);
echo "<h2>Evocando o método updateById</h2>";
if(!$user->updateById()) {
    echo "<h3>Erro na Alteração</h3>";
} else {
   var_dump($user);
}

echo "<h2>Criando um novo Usuário com o método insert()</h2>";

$newUser = new User(
    NULL,
    2,
    "Godofredo Cardozo",
    "god@gmail.com",
    "234567",
    NULL
);
if(!$newUser->insert())
{
    echo "<h3>Erro na inclusão!" . $newUser->getErrorMessage();
} else {
    var_dump($newUser);
}

echo "<h2>Excluindo um Usuário com o método deleteById()</h2>";

$userDelete = new User();
if(!$userDelete->deleteById(2)) {
    echo "<h3>Registro não encontrado!</h3>";
} else {
    echo "<h3>Registro excluído com sucesso</h3>";
}

