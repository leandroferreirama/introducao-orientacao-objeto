<?php

class Titular
{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNome($nome);
    }

    public function getCPF(): String
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    private function validaNome($nome){
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
        }
    }
}