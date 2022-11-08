<?php

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculate_energy_drinkers(int $numberSurveyed)
{
    throw new LogicException(";(");
}

function calculate_prefer_citrus(int $numberSurveyed)
{
    throw new LogicException(";(");
}


//fixme
echo "Total number of people surveyed " . $surveyed. PHP_EOL;
echo "Approximately " . round($purchased_energy_drinks*$surveyed) . " bought at least one energy drink". PHP_EOL;
echo round($prefer_citrus_drinks*($purchased_energy_drinks*$surveyed)). " of those " . "prefer citrus flavored energy drinks.";