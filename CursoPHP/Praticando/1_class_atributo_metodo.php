<?php

Class Pessoa{
// atributos

public $nome;
public $idade;

// metodo ou funcao

public function falar(){
    echo $this->nome."de ".$this->idade." anos falou";
}
}

// instaciar a class

$pessoa = new Pessoa();
$pessoa->nome="Delson";
$pessoa->idade=23;
$pessoa->falar();
