<?php

class One{

    public function className(){
        return __CLASS__;
    }
      
    public function getclassName(){
        // echo self::className();
        echo $this -> className();
    }
}

class Two extends One{
    public function className()
    {
        return __CLASS__;
    }
}

$one = new One;
$one -> getclassName(); 

echo "<hr>";

$two = new Two;
$two -> getclassName(); 

?>