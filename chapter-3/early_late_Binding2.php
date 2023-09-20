<?php

use One as GlobalOne;

class One {

    public static $name = "maybel";

    public static function authorName(){
        return self::$name;
    }

    public static function getauthorName(){
        echo static::authorName();
    }
}


class Two extends One {
    public static function authorName()
    {
        return self::$name . " and leo";
    }

}

One::getauthorName();
echo "<hr>";
Two::getauthorName();

?>