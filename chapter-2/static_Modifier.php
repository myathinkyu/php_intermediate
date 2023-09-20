<?php

class index{
    private static $count = 0;

    public function getCount(){
        self::$count++;
        echo self::$count;
    }
}

$obj = new index;
$obj -> getCount();
echo "<br>";
$obj -> getCount();

echo "<hr>"; 

$aa = new index;
$aa -> getCount();
echo "<br>";
$aa -> getCount();

?>