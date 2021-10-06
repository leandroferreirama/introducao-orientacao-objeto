<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Desenvolvedor,Gerente,Diretor};
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\ControladorBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Leandro Ferreira', 
    new Cpf('000.000.000-00'), 
    1000);

$umaFuncionaria = new Gerente(
    'Patricia',
    new Cpf('000.000.000-19'),
    3000
);

$outroFuncionario = new Diretor(
    'Marcelo',
    new Cpf('000.000.000-00'),
    5000
);

$controlador = new ControladorBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($outroFuncionario);
echo $controlador->getTotal();
