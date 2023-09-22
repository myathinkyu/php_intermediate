<?php

require_once "vendor/autoload.php";

use app\best;

class index{
    public function __construct()
    {
        $house = new app\house;
        $house -> sayHouseName();

        $best = new best;
        $best -> sayBestName();

        $fill = new app\middleware\fill;
        $fill -> sayFillName();

        $base = new app\base;
        $base -> sayBaseName();
    }
}

new index;

?>