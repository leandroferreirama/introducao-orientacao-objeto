<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        Self::$numeroDeContas++;
    }

    public function __destruct(){
        Self::$numeroDeContas--;
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

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular(): string
    {
        return $this->titular->getCPF();
    }

    public static function recuperarNumeroDeContas(): int
    {
        return Self::$numeroDeContas;
    }
}