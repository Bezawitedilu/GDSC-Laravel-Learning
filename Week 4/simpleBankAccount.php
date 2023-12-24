<?php

class BankAccount{
    private $accountNumber;
    private $accountholder;
    private $balance;


    public function __construct($accountNumber, $accountholder, $initialBalance){
        $this->accountNumber = $accountNumber;
        $this->accountholder = $accountholder;
        $this->balance = $initialBalance;
    }
    
    public function withdraw($amount){
        if ($amount <= $this->balance){
            $this->balance-=$amount;
            echo "Withdrawed $amount . New balanc: {$this->balance}";
        }
        else{
            echo"Insufficient funds";
    }
}

    public function deposit($amount){
        $this->balance+=$amount;
        }
    }

    $account = new BankAccount('123456789', "Bezawit", 1000);

    $account->deposit(200);
    $account->withdraw(120);