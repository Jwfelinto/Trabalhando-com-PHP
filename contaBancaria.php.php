<?php

class ContaBancaria
{
    public $banco;
    public $titular;
    public $agencia;
    public $conta;
    private $saldo;

   
    public function __construct($banco, $titular, $agencia, $conta, $saldo)
    { 
        $this->banco = $banco;
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    } 
    
    
    public function obterSaldo()
    {
        return ' Seu saldo é R$: ' . $this -> saldo . '. '; 
    }

    public function deposito($valor)
    {
        $this -> saldo += $valor;
        return ' Depósito de R$: ' . $valor . ' realizado com sucesso! ';
    }

    public function saque($valor)
    {
        $this -> saldo -= $valor;
        return ' Saque de R$: ' . $valor . ' realizado com sucesso! ';
    }
}
    $conta = new ContaBancaria(
    'Super Bank', // banco
    'Jonathan Felinto', // nomeTitular
    '0001', // agencia
    '155663-2',
    30000.00 //saldo
);

echo $conta -> obterSaldo();
echo $conta -> deposito(12000.00);
echo $conta -> obterSaldo();
echo $conta -> saque(4200.00); 
echo $conta -> obterSaldo();



