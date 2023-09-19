<?php

trait member{
    var $name = "Mg Mg";
}

trait hacker{
    var $age = 40;

}

trait leader{
    use member,hacker;
}

class usingTrait {
    use leader;
}


$obj = new usingTrait;
echo $obj -> name."<br>";
echo $obj -> age;
?>