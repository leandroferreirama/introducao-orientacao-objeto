<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->validaNome($nomeTitular);
        $this->saldo = 0;
    }

    public function sacar(float $valorSacar): void
    {
        if($valorSacar > $this->saldo){
            echo 'Saldo indisponível';
            return;
        }
        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorDepositar): void
    {
        if($this->saldo < 0){
            echo 'Não pode ser o valor zero';
            return;
        }
        $this->saldo += $valorDepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo 'Saldo indisponível';
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setNomeTitular($value): void
    {
        $this->nomeTitular = $value;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setCpfTitular($value): void
    {
        $this->cpfTitular = $value;
    }

    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    private function validaNome($nome){
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
        }
    }
}