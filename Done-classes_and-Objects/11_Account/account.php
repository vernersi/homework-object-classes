<?php

class Account {

    private string $accName;
    private float $balance;

    public function __construct(string $accName, float $balance)
    {
        $this->accName = $accName;
        $this->balance = $balance;
    }

    public function withdrawal($amount){
        $this->balance-=$amount;
    }

    public function balance():float{
        return number_format($this->balance,2,'.');
    }

    public function deposit($amount){
        $this->balance+=$amount;
    }

    public function __toString():string{
        return $this->accName.' balance is : '.$this->balance;
    }

    public function transfer(Account $from, Account $to, int $howMuch) {
        $from->withdrawal($howMuch);
        $to->deposit($howMuch);
    }
}

$myAccount = new Account('Verners', 100);
$myAccount->deposit(20);
echo $myAccount. PHP_EOL;

