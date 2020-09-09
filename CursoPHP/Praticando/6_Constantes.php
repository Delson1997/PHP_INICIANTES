<?php
Class Pessoa{

const nome="Armando";


public function exibirNome(){

    echo self::nome;

}
}

Class  Delson extends Pessoa{
    const nome="Delson";
    public function exibirNome(){
        echo self::nome;
    }
    }

    Class Elton extends Pessoa{
        const nome="Elton";
        public function exibirNome(){
            echo parent::nome;
        
        }
        }

        $delson = new Delson();
        $delson->exibirNome();
        echo"<hr>";

        $elton = new Elton();
        $elton->exibirNome();

        // parent exibe o nome do pai
        // self exibe o nome da class