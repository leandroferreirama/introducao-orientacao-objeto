<?php

namespace Alura\Banco\Modelo;


abstract class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf){
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    protected function validaNome(string $nome){
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}