<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

abstract class Funcionario extends Pessoa
{
    protected float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario){
        parent::__construct($nome, $cpf);

        $this->salario = $salario;
    }

    public function updNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function CalculaBonificacao(): float
    {
        return $this->salario*0.1;
    }
}