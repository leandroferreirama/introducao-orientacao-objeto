<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario{
    function calculaBonificacao(): float
    {
        return 500.0;
    }
}