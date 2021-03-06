<?php

namespace Alura\Banco\Modelo;

class Cpf
{
    private string $numero;

    public function __construct(String $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($numero === false){
            echo 'CPF Inválido';
            exit();
        }
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }
}