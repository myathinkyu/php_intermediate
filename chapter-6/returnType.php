<?php

class index
{
    public function showResult(int $num) : string  
    {
        return "real";
    }
}

$ind = new index;
$v = $ind -> showResult(10);
var_dump($v);


?>