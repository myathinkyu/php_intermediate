<?php

class index{
    public function showResult($num)
    {
        // if(is_int($num)){
        //     echo "Your argument is integer<br>";
        // }else{
        //     die("We need integer data type variable!");
        // }
        // if(is_string($num)){
        //     echo "Your argument is string<br>";
        // }else{
        //     die("We need string data type variable!");
        // }
        // if(is_bool($num)){
        //     echo "Your argument is boolean<br>";
        // }else{
        //     die("We need boolean data type variable!");
        // }
        // if(is_null($num)){
        //     echo "Your argument is null<br>";
        // }else{
        //     die("We need null data type variable!");
        // }
        if(is_float($num)){
            echo "Your argument is float<br>";
        }else{
            die("We need float data type variable!");
        }
    }
}

$ind = new index;
$ind -> showResult(21.6);


?>