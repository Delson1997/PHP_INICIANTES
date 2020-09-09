
<?php


Class Produto {
    public $nome;
    public $valor;


    function __construct ($nome,$valor){
        $this->nome=$nome;
        $this->valor=$valor;
    }

}

Class Carinho{
public $produtos;


public function adcionar(Produto $produto){
    // esta funcao quer dizer que obrigatoriamente  o paramentro da funcao adciona de 
    // uma instacia da Class Produto.

    $this->produtos[]=$produto;
}

public function exibir(){

foreach($this->produtos as $produto){
    echo $produto->nome.'<br>';
    echo $produto->valor.'<hr>';

}}}


$produto1= new Produto("Netbook","$2500");
$produto2= new Produto("Kika 1","$1500");
$produto3= new Produto("Mouse","$500");


$carinho = new Carinho();
$carinho->adcionar($produto1);
$carinho->adcionar($produto2);
$carinho->adcionar($produto3);

$carinho->exibir();