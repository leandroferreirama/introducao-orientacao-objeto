<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorSacar){
        if($valorSacar > $this->saldo){
            echo 'Saldo indisponível';
        } else {
            $this->saldo -= $valorSacar;
        }
    }

    public function depositar(float $valorDepositar){
        if($this->saldo < 0){
            echo 'Não pode ser o valor zero';
        } else {
            $this->saldo += $valorDepositar;
        }
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo 'Saldo indisponível';
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }
}