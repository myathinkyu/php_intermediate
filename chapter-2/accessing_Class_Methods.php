<?php

class accessing_Class_Methods{
    var $name = "Mg Mg";
    public function denko($name){
        echo "I am denko method. $name";
    }
}

$obj = new accessing_Class_Methods;
$obj -> denko("brighter myanmar");
echo "<br>" . $obj -> name;


?>