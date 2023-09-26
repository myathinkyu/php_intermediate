<?php

class myErrorClass extends Exception
{

}


function myErrorHandler($erCode, $erMessage, $file, $lineNum)
{
    echo "Error code is ". $erCode ."<br>";
    echo "Error message is ". $erMessage ."<br>";
    echo "Error file is ". $file ."<br>";
    echo "Error line number is ". $lineNum ."<br><hr>";
    throw new myErrorClass($erMessage, $erCode);
}


set_error_handler("myErrorHandler");


try{
    include "Hello.php";
}catch(Exception $e) {
    echo $e-> getMessage(). "<br>";
    echo $e-> getCode(). "<br>";
    echo $e-> getLine(). "<br>";
}


?>