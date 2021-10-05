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
            $this->sqldo -= $valorSacar;
        }
    }
}