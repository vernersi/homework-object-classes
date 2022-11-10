<?php
require_once "account.php";

$mattsAccount = new Account("Matt's account", 1000);
$myAccount = new Account('My Account', 0);
$mattsAccount->withdrawal(100);
$myAccount->deposit(100);
echo $mattsAccount.PHP_EOL;
echo $myAccount.PHP_EOL;

$A = new Account('A', 100);
$B = new Account('B', 0.0);
$C = new Account('C', 0.0);
$A->transfer($A,$B,50);
$A->transfer($B,$C,50);

echo $A. PHP_EOL;
echo $B. PHP_EOL;
echo $C. PHP_EOL;