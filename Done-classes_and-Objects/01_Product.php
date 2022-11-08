<?php

class Product
{
//A product has a price, amount and name.
    private string $name;
    private float $startPrice;
    private int $amount;


    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    //Print Product like this ---> Banana, price 1.1, amount 13
    public function printProduct(): string
    {
        return "$this->name, price $this->startPrice, amount $this->amount ";
    }

    //method to change the qty of product
    public function changeQty(int $newQty): int
    {
       return $this->amount = $newQty;
    }

    //method to change product price
    public function changePrice(float $newPrice): float
    {

        return $this->startPrice = $newPrice;
    }

}

//"Epson EB-U05", 440.46 EUR, 1 units
$mouse = new Product('Logitech mouse', 70.00, 14);
$iphone = new Product('iPhone 5s', 999.99, 3);
$epson = new Product('Epson EB-UO5', 440.46, 1);

echo $mouse->printProduct() . PHP_EOL;
echo $iphone->printProduct() . PHP_EOL;
echo $epson->printProduct() . PHP_EOL;

$mouse->changeQty(5);
echo $mouse->printProduct() . PHP_EOL;

$iphone->changePrice(799.81);
echo $iphone->printProduct() . PHP_EOL;