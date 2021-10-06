<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Funcionario,Cpf};
use Alura\Banco\Service\ControladorBonificacoes;

$umFuncionario = new Funcionario(
    'Leandro Ferreira', 
    new Cpf('000.000.000-00'), 
    'Desenvolvedor',
    1000);

$umaFuncionaria = new Funcionario(
    'Patricia',
    new Cpf('000.000.000-19'),
    'Gerente',
    3000
);

$controlador = new ControladorBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);
echo $controlador->getTotal();
