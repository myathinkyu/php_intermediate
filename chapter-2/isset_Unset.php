<?php

class index{
    public function __isset($name)
    {
        echo "You are trying check the set or not of {$name} property<hr>";
    }
    public function __unset($name)
    {
        echo "You are trying check the unset or not of {$name} property";
    }
}


$obj = new index;
isset($obj-> the);
unset($obj-> good);

?>