<?php

namespace app\middleware;

use DateTime;

class fill 
{
    public function sayFillName()
    {
        echo "Hello My name is " . __CLASS__."<hr>";
        $dtime = new \DateTime(); 

    }
}



?>