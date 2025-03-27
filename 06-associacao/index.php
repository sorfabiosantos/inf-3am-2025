<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\Records\Address;
use Source\Models\User;

$address = new Address(
    300, 27, "96700-000", "Rua A"
);
var_dump($address);

$user = new User(
    id: 27,
    name: "Fábio",
    email: "fabio@gmail.com",
    address: $address
);
var_dump($user);