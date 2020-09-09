<?php

Class Pedido{
public $numero;
public $cliente;
}

Class Cliente{
    public $nome;
    public $endereco;
    }


    $cliente = new Cliente();
    $cliente->nome="Delson";
    $cliente->endereco="Mozal, Djuba B";


    $pedido = new Pedido();
    $pedido->numero="123";
    // fazendo uma associacao
    $pedido->cliente=$cliente;


    $dados=array(
    'numero'=>$pedido->numero,
    'cliente_nome'=>$pedido->cliente->nome,
    'cliente_endereco'=>$pedido->cliente->endereco
    );
var_dump($dados);