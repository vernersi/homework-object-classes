<?php

class BankAccount
{
    public string $name;
    public float $balance;


    public function show_user_name_and_balance():string {
    if ($this->balance <0){
        $absBalance = abs($this->balance);
        return "$this->name, -$$absBalance";
    } return "$this->name, $$this->balance";
    }


}
$ben = new BankAccount();
$ben->name = 'Benson';
$ben->balance = -17.25;
echo $ben->show_user_name_and_balance();