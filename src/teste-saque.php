<?php

use Alura\Banco\Modelo\Conta\{Conta,Titular};
use Alura\Banco\Modelo\{Cpf,Endereco};

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new Cpf('000.000.000-00'), 
        'Leandro', 
        new Endereco('Curitiba', 'Bacacheri','Estados Unidos','182')));

$conta->depositar(500);
$conta->sacar(100);

echo $conta->getSaldo();
