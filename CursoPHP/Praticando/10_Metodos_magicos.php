<?php
Class Pessoa{

private $nome;

 public function __set($nome,$valor){ 
    // set da nos atribuir valor de um atributo privado
    $this->nome=$valor;
}
public function __get($nome){
    // get permite nos  visualizar o valor de um atributo privado
    return $this->nome;
}
}


$pessoa=new Pessoa();
$pessoa->nome="Delson";
echo $pessoa->nome."<hr>";


// testando em um array

Class Carro{

    private $dados=array();
    
     public function __set($nome,$valor){ 
        // set da nos atribuir valor de um atributo privado
        $this->dados[$nome]=$valor;
    }
    public function __get($nome){
        // get permite nos  visualizar o valor de um atributo privado
        return $this->dados[$nome];
    }
    public function __tostring(){
        return "Tentei imprimir obejcto";
    }
    
    public function __invoke(){
        return "Objecto como funcao";
    }
    }
    
    
 /*   $car=new Carro();
    $car->nome="Vitz";
    $car->Cor="Vermeho";
    $car->velocidade="180km/h";
    echo $car->nome.'<br>';
    echo $car->Cor.'<br>';
    echo $car->velocidade.'<br>'; */

    $car=new Carro();
    $car->nome="Vitz";
    $car->Cor="Vermeho";
    $car->velocidade="180km/h";

    echo $car;

