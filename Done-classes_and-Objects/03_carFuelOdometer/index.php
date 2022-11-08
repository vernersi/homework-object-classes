<?php
require_once 'FuelGauge.php';
require_once 'Odometer.php';

$fuelGauge = new FuelGauge(2);
$odometer = new Odometer(2000);

while($fuelGauge->getAmount() > 0 ) {
    echo "We drove 1 km".PHP_EOL;
    $odometer->increment();
    if ($odometer->getMileage()%10===0){
        $fuelGauge->burn(1);
        echo "Fuel left ".$fuelGauge->getAmount().PHP_EOL;
    }
    sleep(1);
}