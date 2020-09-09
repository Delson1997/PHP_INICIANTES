<html>
<body>
<?php /*
//Tudo acerca da validacao
if(isset($_POST['enviar_formulario'])):
   // Array de erros
   $erros=array();
// validacoes
   if(!$idade=filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)):
      $erros[]="Idade deve ser inteiro";
   endif;
   if(!$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)):
      $erros[]="Email invalido";
   endif;
   if(!$peso=filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)):
      $erros[]="Peso de ser um Float";
   endif;
   if(!$url=filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)):
      $erros[]="URL invalido";
   endif;

// Verificando se existe erro
if(!empty($erros)):
   foreach($erros as $erro):
      echo "<li>$erro</li>";
   endforeach;
else:
   echo "Parabens seus dados estao corretos!";
endif;

endif;

*/


// TUDO SOBRE SANITIZAÇÃO


if(isset($_POST["enviar_formulario"])):
   // Array de erros
   $erros=array();
// Sinitizaçoes
$idade = filter_input(INPUT_POST ,"idade",FILTER_SANITIZE_NUMBER_INT); //ler apenas nr
 if(!filter_var($idade,FILTER_VALIDATE_INT)){
    $erros[]= "Idade precisa ser um inteiro";
 }
    $email = filter_input(INPUT_POST ,"email",FILTER_SANITIZE_EMAIL); //ler apenas nr
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $erros[]= "EMAIL invalido";
 }
 
// Verificando se existe erro
if(!empty($erros)):
   foreach($erros as $erro):
      echo "<li>$erro</li>";
   endforeach;
else:
   echo "Parabens seus dados estao corretos! <br>";
endif;

endif;




?>


   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
   Nome: <input type="text" name="nome"> <br>
   Idade: <input type="text" name="idade"> <br>
   Email: <input type="email" name="email"> <br>
   URL: <input type="text" name="url"> <br>
   <button type="submit" name="enviar_formulario">Enviar</button>
   
   </form> 




</body>
</html>