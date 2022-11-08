<?php
class FuelGauge {
/*To know the car’s current amount of fuel, in liters.
To report the car’s current amount of fuel, in liters.
To be able to increment the amount of fuel by 1 liter. This simulates putting fuel in the car. ( The car can hold a maximum of 70 liters.)
To be able to decrement the amount of fuel by 1 liter, if the amount of fuel is greater than 0 liters. This simulates burning fuel as the car runs.*/
private int $amount;

public function __construct($amount) {
    $this->amount = $amount;
}


public function getAmount():int
{
    return $this->amount;
}

public function fill(int $fillAmount=1):void {
    $maxAmount = 70;
    $newAmount = $this->amount+$fillAmount;
    if ($newAmount>$maxAmount){
        $newAmount = $maxAmount;
    }
    $this->amount = $newAmount;
}

    public function burn(int $burnAmount=1):void {
        $minAmount = 0;
        $newAmount = $this->amount-$burnAmount;
        if ($newAmount<=$minAmount){
            $newAmount = $minAmount;
        }
        $this->amount = $newAmount;
    }



}