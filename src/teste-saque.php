<?php

use Alura\Banco\Modelo\Conta\{Conta,Titular,ContaPoupanca, SaldoInsuficienteException};
use Alura\Banco\Modelo\{Cpf,Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('000.000.000-00'), 
        'Leandro', 
        new Endereco('Curitiba', 'Bacacheri','Estados Unidos','182')));

$conta->depositar(500);
try{
    $conta->sacar(1000);
} catch (SaldoInsuficienteException $e){
    echo $e->getMessage();
}

echo $conta->getSaldo();
