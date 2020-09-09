<?php
session_start();
include_once 'db_connect.php';
function clear($input){
    global $connect;
    $var=mysqli_escape_string($connect, $input);
    $var=htmlspecialchars($var);
    return $var;
    }

if(isset($_POST["btn_editar"])):
    $idade = filter_input(INPUT_POST ,"idade",FILTER_SANITIZE_NUMBER_INT); //ler apenas nr
    
    $nome=clear($_POST["nome"]);
    $sobrenome=clear($_POST["sobrenome"]);
    $email=clear($_POST["email"]);
    $idade=clear($_POST["idade"]);
    $id_cliente=clear($_POST["id_cliente"]);
    
    $sql = "UPDATE clientes SET nome='$nome',sobrenome='$sobrenome',email='$email',idade='$idade'
    WHERE id_cliente='$id_cliente' ";
if(mysqli_query($connect,$sql)):
    $_SESSION['mensagem'] = "Actualizado com sucesso";
    header('Location: ../index.php?sucesso');
else:
    $_SESSION['mensagem'] = "Erro ao Actualizar";
    header('Location: ../index.php?erro');

endif;
endif;

?>