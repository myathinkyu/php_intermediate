<?php

function doIt($para1,$para2,$para3){
    $total = $para1 + $para2;
    $para3($total);
}


// $lam = function($var1){
//     echo "I am Lambda {$var1}";
// };

// doIt(4,6,$lam);

doIt(5,4,function($var1){
    echo "I am Lambda {$var1}";
});

?>