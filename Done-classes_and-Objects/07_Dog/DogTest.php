<?php
require_once "07_Dog.php";
class DogTest {



    public function __construct(){
        $max = new Dog('Max','Male');
        $rocky =new Dog('Rocky','Male');
        $sparky = new Dog('Sparky','Male');
        $buster =new Dog('Buster','Male');
        $sam = new Dog('Sam','Male');
        $lady = new Dog('Lady','Female');
        $molly = new Dog('Molly','Female');
        $coco = new Dog('Coco','Female');

        $max->mother = $lady;
        $max->father = $rocky;
        $coco->mother = $molly;
        $coco->father = $buster;
        $rocky->mother = $molly;
        $rocky->father = $sam;
        $buster->mother = $lady;
        $buster->father = $sparky;

        var_dump ($coco->getFathersName());
        var_dump ($sparky->getFathersName());
        var_dump ($coco->HasSameMotherAs($rocky));
}
}

new DogTest();








