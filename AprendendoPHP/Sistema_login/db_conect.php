<?php

$servername="localhost";
$username="root";
$password="";
$db_name="sistema_login";

// armazenando a coxexao na variavel $connect;

$connect = mysqli_connect($servername, $username, $password,$db_name );

// verificando se ha erro na conexao mysqli(suporta php procedural e php oo)

if(mysqli_connect_error()):
      echo "Falha na conexao: ".mysqli_connect_eroor();
endif;

?>