<?php

require_once ('member.php');

$rpa = new ReflectionParameter(['app\member','getDetailInfo'],0);
//echo $rpa -> getType() . "<br>";
//echo $rpa -> getPosition() . "<br>";
echo $rpa -> isDefaultValueAvailable() ? $rpa->getDefaultValue() : "No Default Value";
ShowData(get_class_methods($rpa));



function showData($ary){
    echo "<pre>" . print_r($ary,true) . "</pre>";
}




?>