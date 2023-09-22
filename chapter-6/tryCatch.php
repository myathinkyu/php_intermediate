<?php

error_reporting(0);

try{
    if(fopen('tet.txt','r')){
        echo "pass";
    }else {
        throw new Exception("File can't be read");
    }

}catch(Exception $e){
    echo $e -> getMessage();
}finally{
    echo "<br> call now";
}


?>