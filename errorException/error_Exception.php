<?php

function myFileRead($file)
{
    if(file_exists($file)){
        $handler = fopen($file,'r');
        $size = filesize($file);
        $data = fread($handler,$size);
    
        echo $data; 
    }else{
        throw new Exception("The file is not exist");

    }
}

try{
    myFileRead("mm.txt");
}catch(Exception $e){
    echo $e-> getMessage()."<br>"; 
    echo $e-> getCode()."<br>"; 
    echo $e -> getTraceAsString();
}







?>