<?php

class index{
    private static $name = "Mayble";
    private static $instance;

    private function __construct()
    {
        self::$name = "ariana";
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new index();
        }
        return self::$instance;
    }

    public function getName(){
        return self::$name;
    }
}

$ind = index::getInstance();
echo $ind -> getName();


?>