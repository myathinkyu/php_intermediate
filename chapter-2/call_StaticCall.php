<?php

class index{
    public function __call($method, $arguments)
    {
        echo "you are trying to call method {$method} <hr>";
        echo "<pre>". print_r($arguments). "</pre>";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "you are trying to call static method {$name} <hr>";
        echo "<pre>". print_r($arguments,true). "</pre>";
    }
}


$obj = new index;
$obj -> hey("Mg");

index::hey("mya","moe");
?>