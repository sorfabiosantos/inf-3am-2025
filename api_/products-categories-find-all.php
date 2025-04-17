<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\Store\ProductCategory;

$categories = new ProductCategory();

var_dump($categories->findAll());