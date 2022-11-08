<?php

class Date
{
    private string $day;
    private int $month;
    private int $year;

    public function __construct(string $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function setDay(string $newDay): void
    {
        $this->day = $newDay;
    }

    public function setMonth(int $newMonth): void
    {
        $this->month = $newMonth;
    }

    public function setYear(int $newYear): void
    {
        $this->year = $newYear;
    }

    public function getDay():int {
        return $this->day;
    }

    public function getMonth():int {
        return $this->month;
    }
    public function getYear():int {
        return $this->year;
    }

    public function DisplayDate():string{
        return "$this->day//$this->month//$this->year";
    }

}
$date = new Date('Monday',06,1995);
$date->setDay('Tuesday');
$date->setMonth(7);
$date->setYear(1961);
echo $date->DisplayDate();
