<?php

require_once 'member.php';

$reflect = new app\member();
$rc = new ReflectionClass('app\member');

echo $rc -> getName(). "<br>";
echo $rc -> getFileName(). "<br>";
echo $rc -> hasMethod('setAuth'). "<br>";
echo $rc -> isTrait() ? "trait" : "not trait";

echo "<hr>";

showData(get_class_methods($rc));

function showData($ary){
    echo "<pre>" . print_r($ary,true) . "</pre>";
}

?>