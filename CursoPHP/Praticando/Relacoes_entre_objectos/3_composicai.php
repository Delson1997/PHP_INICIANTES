<?php

Class Pessoa{
public function atribuirNome($nome){
    return "O nome da pessoa e: ".$nome;
}

}

Class Exibir{
public $pessoa;
public $nome;

function __construct($nome){

    $this->pessoa=new Pessoa(); // instacia_se pessoa dentro da classe exibir
    $this->nome=$nome;
}
public function exibirNome(){
    echo $this->pessoa->atribuirNome($this->nome);
}
}

$exibir= new Exibir("Delson");
$exibir->exibirNome();