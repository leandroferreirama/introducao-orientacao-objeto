<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

$endereco = new Endereco('Curitiba', 'Bacacheri', 'Estado Unidos', '182');
$cpf = new Cpf('123.456.789-10');
$titular = new Titular($cpf, 'Leandro Ferreira',$endereco);
$primeiraConta = new Conta($titular);
var_dump($primeiraConta);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$segundaConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Leandro',$endereco));
echo '

Saldo Final: '.$primeiraConta->getSaldo() . PHP_EOL;
echo '

';
echo Conta::recuperarNumeroDeContas();