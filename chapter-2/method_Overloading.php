<?php

class method_Overloading{
    public function doIt($default){
        echo "I am 20";
    }

}

$obj = new method_Overloading();
$obj -> doIt("default");

?>