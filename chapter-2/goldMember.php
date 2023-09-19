<?php

class member{
    var $name = "Mg Mg";
    var $age = 30;
    var $subject = "HTML";
    public function friendCount(){
        echo "I am friend count method.";

    }
}

class goldMember extends member{

}

class myTest extends member{

}



$obj = new myTest();
echo $obj -> name ."<br>"; 
$obj -> friendCount();
?>