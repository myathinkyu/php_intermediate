<?php

require_once "vendor/autoload.php";

class index{
    public function __construct()
    {
        $start = new start;
        $start -> sayStartName();

        $home = new home();
        $home -> sayHomeName();

        $filter = new filter;
        $filter -> sayFilterName();

        $helper1 = new helper1;
        $helper1 -> sayHelperName();

        $end = new End();
        $end -> sayEndName();
    }
}

new index;


?>