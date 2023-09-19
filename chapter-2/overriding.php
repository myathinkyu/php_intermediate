<?php

class member{
    var $name = "Mg Mg";
    public function doIt(){
        echo "I am doing it";
    }
    
    public function friendCount(){
        echo "I am counting your friends.";

    }
}

class overriding extends member{
    public function friendCount()
    {
        echo "This is my class, I will output what i want";
    }

}

$obj = new overriding;
$obj -> friendCount();
echo "<br>";
$obj -> doIt();









?>