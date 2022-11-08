<?php
class SavingsAccount {
    public float $annualInterestRate;
    public float $balance;

    public function __construct($balance){
        $this->balance=$balance;
    }
    public function subtract(float $amount){
        $this->balance-=$amount;
    }

    public function add(float $amount){
        $this->balance+=$amount;
    }

    public function addMonthlyInterest():float{
        $monthlyInterestRate = $this->annualInterestRate/12;
        $monthlyInterest = $monthlyInterestRate*$this->balance;
        $this->balance+=$monthlyInterest;
        return $monthlyInterest;
    }
}

$testClass = new SavingsAccount(readline('How much money is in the account?'));
$testClass->annualInterestRate=readline('Enter the annual interest rate:');
$monthsPassed  =(int) readline('How long has the account been opened?');
$countMonths = 1;
$totalDeposit=0.00;
$totalWithdraw=0.00;
$interestEarned=0.00;
while($countMonths<=$monthsPassed){
    $monthlyDeposit =(int) readline("Enter amount deposited for month: $countMonths:");
    echo PHP_EOL;
    $testClass->add($monthlyDeposit);
    $totalDeposit+=$monthlyDeposit;


    $monthlyWithdraw =(int) readline("Enter amount withdrawn for $countMonths:");
    echo PHP_EOL;
    $testClass->subtract($monthlyWithdraw);
    $totalWithdraw+=$monthlyWithdraw;
    $interestEarned+=$testClass->addMonthlyInterest();

    $countMonths++;
}

$totalDeposit = number_format($totalDeposit,2,'.',',');
$totalWithdraw = number_format($totalWithdraw,2,'.',',');
$interestEarned = number_format($interestEarned,2,'.',',');
$finalBalance = number_format($testClass->balance,2,'.',',');


echo "Total deposited: $ $totalDeposit".PHP_EOL;
echo "Total withdrawn: $$totalWithdraw".PHP_EOL;
echo "Interest earned: $$interestEarned".PHP_EOL;
echo "Ending balance: $$finalBalance".PHP_EOL;
