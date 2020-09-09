<html> 
<head>

<meta charset="utf-8">
<title>Aprendendo PHP</title>
</meta charset="UTF-8">

</head>
<body>
<?php

$teste = "Mozambique \n";
$php = "---$teste--";
echo "$php <br>";

echo "Ola mundo<br>";

// Adicao
$T=2;
$R=5;
$D=$T+$R;
echo "$D <br>";
// Multiplicaca
$G=10;
$V1=10;
$Vx= $G*$V1;
echo "$Vx <br>";

if ($D>$Vx){
	echo "$D e maios que $Vx <br>";
	
}else{
	echo "$D e menor que $Vx <br>";
	
}

// If e o mesmo que Switch
$i = 2;

if ($i == 0)
print "i é igual a zero<br>";
elseif ($i == 1)
print "i é igual a um<br>";
elseif ($i == 2)
print "i é igual a dois <br>";

switch ($i) {
case 0:
print "i é igual a zero <br>";
break;
case 1:
print "i é igual a um <br>";
break;
case 2:
print "i é igual a dois <br>";
break;
}
// Usando While

$i = 1;
while ($i <=10)
print $i++;

// Usando Do White//

/*$e = 0; 
do {
  print ++$e ; 
} while ($e < 10);
*/

// Quebra de Fluxo
$x=20; 
while ($x > 0) {

if ($x == 20) {
echo "<br>erro! x = 20<br>";
Break;
}}
//Usando If Condicao
$texto="sub";
if ($texto != "")
echo "Você digitou \"$texto\"<br>";

//Utilizar Objeectos
class teste {
function nada() {
echo "nada <br>";
}
function tentar() {
echo "Ophaa valeu ne<br>";
}
}
$viva = new teste; // chamar a classe
$viva -> tentar(); // run a function tentar

// O funcionamento das Variaveis Convertendo
$vivas = "1"; // $vivas é a string “1”
$vivas = $vivas + 1; // $vivas é o integer 2
$vivas = $vivas + 3.7;// $vivas é o double 5.7
echo "$vivas <br>";

// Conversao de int e double

$viv = 15; // $vivas é integer (15)
$viva = (double) $viv; // $vivas é double (15.0)
echo "15 quando passa double e $viva <br>";
$vi = 3.9; // $vivas é double (3.9)
$int = (int) $vi; // $vivas é integer (3)
echo "3.9 quando passa int e $int <br>";


//Funcao para converter nr setype
$vivasa = 15; // $vivasa é integer
settype($vivasa,double); // $vivasa é double
echo "15 quando passa int e $vivasa <br>";

?>

<form method=post action="<? echo $PATH_INFO; ?>">
<input type="text" name="texto" value="" size=10>
<br>
<input type="submit" name="sub" value="Enviar!">
</form>
</body>
</html> 