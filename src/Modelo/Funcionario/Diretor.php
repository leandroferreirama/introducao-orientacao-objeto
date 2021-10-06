<?php

namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario
{
    public function CalculaBonificacao(): float
    {
        return $this->salario * 2;
    }
}