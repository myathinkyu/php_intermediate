<?php

class this_Variable{
    public $name = "Mg Mg";

    public function changeName(){
        $this -> name = "Aung Aung";
    }
}


$obj = new this_Variable;
$obj -> changeName();
echo $obj -> name . "<br>";


$bb = new this_Variable;
echo $bb -> name;













?>