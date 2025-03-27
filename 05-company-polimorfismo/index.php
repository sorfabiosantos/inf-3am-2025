<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\Employee\Employee;
use Source\Models\Employee\Seller;

$employee = new Employee(
    name:"Fábio",
    email: "fabio@gmail.com",
    valueHour: 50,
    workHours: 200
);

var_dump($employee);

$salary = number_format($employee->calcSalary(),2,",",".") ;
echo "O funcionário {$employee->getName()} receber R$ {$salary} por mês <br>";

$selles = new Seller(
    name: "Godofredo",workHours: 200, valueHour: 40, salesValue: 8000);
var_dump($selles);

$salary = number_format($selles->calcSalary(),2,",",".") ;
echo "O funcionário {$selles->getName()} receber R$ {$salary} por mês <br>";