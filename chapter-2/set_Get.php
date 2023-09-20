<?php

class index{
    public function __get($name)
    {
        echo "you are trying to get property {$name} <hr>";
    }

    public function __set($name,$value)
    {
            echo "you are trying to set property {$name} with value of {$value} <hr>";
    }


}

$obj = new index;
$obj -> name = "Hla Hla";


?>