
<?php


abstract Class Banco {
protected $saldo;
protected $juris;
protected $saldolimite;

public function setSaldo($sa){
$this->saldo=$sa;

}
public function getSaldo(){
return $this->saldo;

}

abstract protected function Levantar($l);
abstract protected function Depositar($d);

}


Class BIM extends Banco{

  public function Levantar($l){
     $this->saldo -=$l;
     echo "Levantou: ".$l;
      
  }  
  public function Depositar($d){
    $this->saldo +=$d;
  echo "Depositou: ".$d;
      
}  
}

$bim = new BIM();
$bim->setSaldo("1000");
echo "Saldo".$bim->getSaldo();
echo "<hr>";
$bim->Levantar("100");
echo "<hr>";
echo "Saldo actual:".$bim->getSaldo();
echo "<hr>";
echo "<hr>";

$bim->Depositar("1100");
echo "<hr>";
echo "Saldo actual:".$bim->getSaldo();

