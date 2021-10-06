<?php

namespace Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario
{
    public function CalculaBonificacao(): float
    {
        return $this->salario;
    }
}