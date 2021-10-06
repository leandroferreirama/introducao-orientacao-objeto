<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentarLogin(Diretor $diretor, $senha): void
    {
        if($diretor->podeAutenticar($senha)){
            echo 'Ok. Usuário logado com sucesso';
        } else {
            echo 'Senha incorreta';
        }
    }
}