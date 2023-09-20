<?php

class index{

    public static $count = 0;
    public static function showMe(){
        echo self::doIt();
    }
    public static function doIt(){
        echo "hee hee";
    }

}

index::showMe();


?>