<?php

$num = 20;

$var = function(&$data1,$sentence){
    $data1 = 60;
    echo "I am anonymous. Data 1 is {$data1}. {$sentence}";
};

echo $num . "<hr>";
$var($num,"What the hack are u doing?");
echo "<hr>".$num;
?>