<?php
require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Leandro Ferreira');
var_dump($primeiraConta);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$segundaConta = new Conta('123.456.789-10', 'Leandro');
echo '

Saldo Final: '.$primeiraConta->getSaldo() . PHP_EOL;
echo '

';
echo Conta::$numeroDeContas;