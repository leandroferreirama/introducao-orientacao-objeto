<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor(
    'Leandro',
    new Cpf('000.000.000-00'),
    5000
);

$autenticador->tentarLogin($umDiretor, '1234');