<?php
require_once "DogTest.php";
class Dog {
    public string $name;
    public string $sex;
    public object $mother;
    public object $father;

public function __construct(string $name,string $sex){
    $this->name = $name;
    $this->sex = $sex;
}

public function getFathersName():string{
    if (empty($this->father->name)) {
        return "Unknown";
    }
    return $this->father->name;
}
    public function getMothersName():string{
        if (empty($this->mother->name)) {
            return "Unknown";
        }
        return $this->mother->name;
    }

    public function HasSameMotherAs($otherDog):bool{
    return $this->mother == $otherDog->mother;
    }

}