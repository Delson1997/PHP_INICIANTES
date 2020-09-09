<?php

Class Login{

    private $email;
    private $senha;
    private $nome;

    // Criando construtor que inicializado quando a class e inicializada


    public  function __construct($email, $senha, $nome){

        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
         $this->nome = $n;
    }



public function getEmail(){
    return $this->email;
}
public function setEmail($e){

    $email = filter_var($e,FILTER_SANITIZE_EMAIL);
     $this->email = $email;
}

public function getSenha(){
    return $this->senha;
}
public function setSenha($s){
    $this->senha=$s;
}


    public function Logar(){
        if($this->email == "delson@gmail.com" and $this->senha=="123"):

            echo "Logado com sucesso";

        else:
            echo "Dados incorretos";

        endif;



    }
}

$logar = new Login("delson//@gmail.com", "123","Delson Nhantumbo");

$logar->Logar(); 

echo "<hr>";

echo $logar->getEmail()."<br>"; 
echo $logar->getSenha()."<br>";
echo $logar->getNome();












?>