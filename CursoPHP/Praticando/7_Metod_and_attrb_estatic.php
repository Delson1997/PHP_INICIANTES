<?php

// atributo estatico
Class Login{

public static $user;

public static function verificarLogin(){

    echo "Usuario ".self::$user." Logado com sucesso";

}


public function deslogar(){

    echo "Deslogado com sucesso";
}

}
// nao precisamos instaciar a class

Login:: $user="Delson";
Login::verificarLogin();
echo "<hr>";
$login = new Login();
$login->deslogar();

