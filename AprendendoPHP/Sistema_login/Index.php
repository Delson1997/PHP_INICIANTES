<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
<?php
// chamando a conexao
require_once "db_conect.php";

//iniciar uma sessao
session_start();

if(isset($_POST["bt_entrar"])):
    $errors= array();
    $login= mysqli_escape_string($connect,$_POST["login"]);
    $senha= mysqli_escape_string($connect,$_POST["senha"]);

    if(empty($login) or empty($senha)):
        $errors[] = "<li> Porfavor preencha todos os campos</li>";
    else:
        $senha=md5($senha); // criptografando a senha;
       
        $sql = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
        
        $resultado = mysqli_query($connect,$sql); // variavel que armazena o resultado
        
      if(mysqli_num_rows($resultado)==1):  // verifica se os dados inseridos existem na bd
        
        $dados = mysqli_fetch_array($resultado);   // Coverter resultados em array
        mysqli_close($connect);
        $_SESSION['logado']='true';
        $_SESSION['id_usuario']=$dados['id'];
        header('Location:home.php'); // funcao que dericiona o usuario;
      
       else:
        $errors[]="<li>Dados incoreto</li>";
    endif;
    endif;
    // verificando se o array erros contem erros 
    if(!empty($errors)):
        foreach($errors as $erros):
            echo $erros;
        endforeach;
        endif;
    endif;

?>

<h3>Login</h3>
<form action="<?php echo $_SERVER["PHP_SELF"];?>"  method= "POST">
Login: <input type="text" name="login"><br>
Senha: <input type="password" name="senha"><br>
<button type="submit" name="bt_entrar">Entrar</button>
</form>
</body>
</html>