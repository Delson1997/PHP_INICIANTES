<?php

// excessoes Ocorrencia anormal que afecta o funcionamneto da sistema
//Exception e a classe base apara todas as Exceptions
// message, code, line,file


Class Newletter{

    public function cadastrarEmail($email){
        //validando email usando filter_var
if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
    throw new Exception("Este email e inavlido", 1);
else:
    echo "Email Cadastrato com sucesso";
endif;

    }
}

$newletter= new Newletter();
try {
    $newletter->cadastrarEmail("delson//.com");
} catch (Exception $e) {
    echo "Mensagem ".$e->getMessage()."<br>";
    echo "Codigo ".$e->getCode()."<br>";
    echo "Linha ".$e->getLine()."<br>";
    echo "Arquivo ".$e->getFile()."<br>";
}
