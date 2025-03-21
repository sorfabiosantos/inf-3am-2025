<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\User;
use Source\Models\Hospital\Doctor;

$user = new User(1, 3, "Fábio", "fabio@gmail.com");
var_dump($user);

$doctor = new Doctor(2,2, "Vicnicius", "vini@gmail.com","234","photo","987667","Cardiologista");
var_dump($doctor);