<html>
<body>


<?php

if(isset($_POST['Enviar'])):

$formatospermitidos = array("png","jpeg","jpg","gif");
$extensao = pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION);

if(in_array($extensao,$formatospermitidos)):

$pasta="arquivos/";
$temporario= $_FILES["arquivo"]["tmp_name"];
$novonome=uniqid().".$extensao";

if(move_uploaded_file($temporario,$pasta.$novonome)):

   echo "Upload Feito com sucesso";


else:
    echo "ERRO, nao foi possivel fazer o Upload";
endif;
endif;
endif;


?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<input type="file" name="arquivo"><br>
<input type="submit" name="Enviar">
</form>



</body>
</html>