<?php

require_once "loader.php";

class index
{
    public function __construct()
    {
        loader::load('helper');
        $helper =  new helper("helper");
        $helper -> sayYourName();

        loader::load('hello');
        $hello = new hello();
        $hello -> sayHello();

        loader::load('greet');
        $greet = new greet();
        $greet -> sayGreet();

    }

}

$ind = new index;


?>