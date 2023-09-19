<?php

class destructor{
    var $t = 0;
    public function __construct(){
        echo "I am constructor and start working<br>";
    }

    public function loopIt(){
        for($i = 0; $i < 10000; $i++){
            $this -> t += $i;
        }
        echo "T value is ". $this->t ."<br>";
    }
    public function __destruct()
    {
        echo "I am destructor and stop working";
    }

}

$obj = new destructor;
$obj -> loopIt();



?>