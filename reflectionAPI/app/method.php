<?php

require_once('member.php');

$rm = new ReflectionMethod('app\member' , 'getDetailInfo');


//$rm -> invoke(object:new app\member) ;
$mem = new app\member;
//$rm -> invoke($mem,['123',"bro"]);
echo $rm -> invokeArgs($mem,['testing']);
//echo $rm -> isPublic() ? "public" : "unpublic";
echo "<hr>";
ShowData(get_class_methods($rm));

function showData($ary){
    echo "<pre>" . print_r($ary,true) . "</pre>";
}



?>