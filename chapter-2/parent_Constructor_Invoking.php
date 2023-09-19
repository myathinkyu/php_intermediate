<?php

class member{
    var $name = "Mg Mg";
    public function __construct()
    {
       echo "Dad is working!";
    }
}

class parent_Constructor_Invoking extends member{
    var $subject = "Math";
    public function __construct()
    {
        parent::__construct();
        echo "Child is playing!<br>";
    }
}


$obj = new parent_Constructor_Invoking;
echo $obj -> name;
echo "<br>". $obj -> subject;


?>