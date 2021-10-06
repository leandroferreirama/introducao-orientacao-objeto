<?php

namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->salario * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        if($senha !== '1234'){
            return false;
        }
        return true;
    }
}