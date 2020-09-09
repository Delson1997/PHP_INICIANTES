<?php

$string="delson56@gmail.com";
$padrao="/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|mz|br)$/i";

if(preg_match($padrao,$string)):
    echo "Valido";
    echo "<hr>";
    echo $string;
else:
    echo "Invalido";
    echo "<hr>";
endif;

echo "<hr>";
echo "<hr>";


$date = "12/05/2014";
$padro = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if(preg_match($padro,$date)):
    echo "Valido";
    echo "<hr>";
    echo $date;
else:
    echo "Invalido";
    echo "<hr>";
endif;

?>