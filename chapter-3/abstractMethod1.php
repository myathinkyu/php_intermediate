<?php

abstract class parentClass
{
    const DB_HOST = "localhost";
    public $name = "may may";

    public abstract function myAbs();
    public function doIt()
    {
        echo "I am doing it now<hr>";
    }

}

class index extends parentClass
{
    public function myAbs(){
        echo "I am abstract method originally.";
    }
}

$ind = new index;
$ind -> myAbs();

?>