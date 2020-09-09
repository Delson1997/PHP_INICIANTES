<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina restrita</title>
</head>
<body>
<?php
require_once "db_conect.php"; 
session_start();

// verificando se o usuario esta logado
if(!isset($_SESSION['logado'])):
    header('Location:Index.php');
endif;


$id= $_SESSION['id_usuario'];
$sql = " SELECT * FROM usuario WHERE id = '$id'";
$resultado = mysqli_query($connect,$sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);  // fechar a conexao
$nome =$dados['nome'];
?>

<h1> Ola <?php echo $nome ?> </h1>

<a href="logout.php">sair</a>


    
</body>
</html>