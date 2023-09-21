<?php

$number = 20;

$var = function() use($number){
    echo "I am closure {$number }";
};

$var();

?>