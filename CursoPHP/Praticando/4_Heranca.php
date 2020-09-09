<?php

Class Veiculo{
    public $modelo;
    public $cor;
    public $ano;
    
    public function Andar(){
        echo $this->modelo." de cor ".$this->cor." e de ".$this->ano." parou"."<br>";
       
    }
    
    public function parar(){
        echo $this->modelo." de  cor ".$this->cor." e de ".$this->ano." andou"."<br>";
    }
    }

    // Uso de extends para herdar atributos e metodos

Class Carro extends Veiculo{

    public function AbrirAporta(){
        echo "Carro abre aporta"
    }

}

Class Moto extends Veiculo{
    public function Dargrau(){
        echo "Modo da grau"
    }
    
    }
    
    // instaciando classe que herdaram atributos e metodos

    $carro = new Carro();
    $carro->modelo="Toyota";
    $carro->cor="Toyota";
    $carro->ano=2019;
     $carro->Andar();
     $carro->Parar();

     echo "<hr>";
    $moto = new Moto();
    $moto->modelo="RT";
    $moto->cor="Preta";
    $moto->ano=2018;
    $moto->Andar();
    $moto->Parar();
    
    
    




?>