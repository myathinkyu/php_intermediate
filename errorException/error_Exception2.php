<?php

class MyCustomException extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
        $handler = fopen("log.txt",'a');
        $data = "\n\nError Message => \n" .$message. "\nError Number => \n" .
        $code. "\nError Timestamp\n" . date("Y-m-d H:m:s",time());
        fwrite($handler,$data);
        fclose($handler);
    }
}


function rFile($file){
    if(!file_exists($file))
        throw new MyCustomException("File Not Found! reported by my custom exception class", 1000);
}

try{
    rFile(("kk.txt"));
}catch(Exception $e){
    echo $e -> getMessage();
}




?>