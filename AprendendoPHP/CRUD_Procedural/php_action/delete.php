<?php
session_start();
include_once 'db_connect.php';


if(isset($_POST["btn-deletar"])):
   
    $id_cliente=mysqli_escape_string($connect, $_POST["id_cliente"]);

    $sql = "DELETE FROM clientes  WHERE id_cliente='$id_cliente' ";
if(mysqli_query($connect,$sql)):
    $_SESSION['mensagem'] = "Excluido com sucesso";
    header('Location: ../index.php?sucesso');
else:
    $_SESSION['mensagem'] = "Erro ao Excluir";
    header('Location: ../index.php?erro');

endif;
endif;

?>