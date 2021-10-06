<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
require_once 'src/Endereco.php';

$endereco = new Endereco('Curitiba', 'Bacacheri', 'Estado Unidos', '182');
$primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Leandro Ferreira',$endereco));
var_dump($primeiraConta);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$segundaConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Leandro',$endereco));
echo '

Saldo Final: '.$primeiraConta->getSaldo() . PHP_EOL;
echo '

';
echo Conta::recuperarNumeroDeContas();