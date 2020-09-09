<?php

Class Login{

    private $email;
    private $senha;

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

$logar = new Login();
$logar->setEmail("delson//@gmail.com");
$logar->setSenha("123");
$logar->Logar(); 

echo "<hr>";

echo $logar->getEmail()."<br>"; 
echo $logar->getSenha();












?>