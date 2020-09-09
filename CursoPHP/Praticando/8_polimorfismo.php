<?php

Class Animal{

    public function Andar(){
echo " O animal andou";
    }
}

Class Cavalo extends Animal{

    public function Andar(){
echo " O Cavalo andou";
    }
}


$cavalo = new Animal();

$cavalo->Andar();