<?php

require "Classes/produto.php";
require "model/produto.php";


use Classes\Produto as ProductModel;
$prodclass= new  ProductModel();
$prodclass->mostrarDetalhes();

echo"<hr>";


use Classes\Produto;
$prodclass= new  Produto();
$prodclass->mostrarDetalhes();

echo"<hr>";

$prodmodel= new \Model\ Produto();
$prodmodel->mostrarDetalhes();
