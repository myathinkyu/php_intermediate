<?php

require_once 'member.php';

$member = new app\member;
$ro = new ReflectionObject($member);

echo $ro -> getName() . "<br>";
echo $ro -> getStartLine() . "<br>";
echo $ro -> getEndLine();
echo "<hr>";

showData(get_class_methods($ro));

function showData($ary){
    echo "<pre>" . print_r($ary,true) . "</pre>";
}

?>