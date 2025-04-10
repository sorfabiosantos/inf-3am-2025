# Loja

## Namespace

Crie a pasta source/Model/Store e dentro dessa crie as classes Product.php para a tabela products do banco de dados e ProductCategory.php para a tabela products_categories do banco de dados. Ambas serão filhas da classe Model.

## Pata API 

Crie a pasta api com os seguintes scripts (o retorno deve ser sempre em JSON):

## Produtos
- products-find-all.php para listar todos o produtos;
- products-find-by-id.php para listar um produto por id, o id do produto deve ser passado por parâmetro e recebido por $_GET
- products-insert.php recebe os dados do produto por parâmetro e recebe por $_GET
- products-update-by-id.php recebe os dados do produto a ser alterado por parâmetro na URL por GET
- products-delete-by-id.php recebe o id do produto a ser excluído por parâmetro na URL
## Categorias de Produtos
- products-categories-all.php
- products-categories-find-all.php
- products-categories-insert.php
- products-categories-update-by-id.php
- products-categories-delete-by-id.php

