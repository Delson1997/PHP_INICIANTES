<html>
<body>


<?php

if(isset($_POST['Enviar'])):

$formatospermitidos = array("png","jpeg","jpg","gif");
$quantidade = count($_FILES["arquivo"]["name"]);
$contador=0;


while($contador < $quantidade):

$extensao = pathinfo($_FILES["arquivo"]["name"][$contador], PATHINFO_EXTENSION);

if(in_array($extensao,$formatospermitidos)):

$pasta="arquivos/";
$temporario= $_FILES["arquivo"]["tmp_name"][$contador];
$novonome=uniqid().".$extensao";

if(move_uploaded_file($temporario,$pasta.$novonome)):

   echo "Upload Feito com sucesso para $pasta $novonome <br>";


else:
    echo "ERRO, nao foi possivel fazer o Upload de $temporario <br>";
endif;
else:
    echo "$extensao nao e permitido <br>";
endif;
$contador++;
endwhile;
endif;


?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<input type="file" name="arquivo[]" multiple ><br>
<input type="submit" name="Enviar">
</form>



</body>
</html>