<?php

$no = 20;
$ary = ["1"=>"One","2"=>"Two","3"=>"Three"];

// function mary($value,$key)
// {
//     echo "Key is " .$key . " Value is ". $value."<hr>";
// }

// array_walk($ary,"mary");


//array walker and lambda
array_walk($ary,function($value,$key) use (&$no)
{
    $no = ++$no;
    echo "Key is " .$key . " Value is ". $value ." Current value is {$no} <hr>";
});


?>