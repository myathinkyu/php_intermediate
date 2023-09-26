<?php

require_once('member.php');

$rp = new ReflectionProperty('app\member' , 'detailInfo');

$rp -> setAccessible(true);
// echo $rp -> isPrivate();

//echo $rp -> getName();
 
$mem = new app\member;
showData($rp -> getValue($mem));
showData(get_class_methods($rp));

function showData($ary){
    echo "<pre>" . print_r($ary,true) . "</pre>";
}

?>