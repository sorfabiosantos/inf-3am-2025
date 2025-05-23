<?php

namespace Source\WebService;

use Source\Models\Product;
use Source\Core\JWTToken;

class Products extends Api
{
  function deleteProduct(array $data)
  {
      var_dump($data);
  }
}