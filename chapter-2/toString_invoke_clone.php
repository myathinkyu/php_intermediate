<?php

class Index{
    public $name = "Mo Mo";
    public function __toString()
    {
        return "This class has no properties or methods<hr> ";
    }
    public function __invoke()
    {
        return "You are trying to call object as method<hr> ";
    }
    public function __clone()
    {
        echo "You are cloning me";
    }
}

$obj = new Index;
//echo $obj;
//echo $obj();
$aa = clone $obj;
//echo $aa -> name;








?>