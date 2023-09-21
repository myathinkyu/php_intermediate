<?php

function doIt(...$var){
    echo $var[0][2];

}

doIt(["One","Two","Three"],"What's up?",[1,2,3,4,5]);

?>