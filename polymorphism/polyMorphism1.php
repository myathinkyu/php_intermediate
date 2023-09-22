<?php

require_once "vendor/autoload.php";

use website\circle;
use website\square;
use website\gern\shape;

class index
{
    public function __construct()
    {
        $square = new square(20,20);
        echo "Square area is " . $square -> getArea();
        echo "<hr>";
        $circle = new circle(45);
        echo "Circle area is " . $circle -> getArea();
        echo "<hr>";
        $this->getPrice($square);
        echo "<hr>";
        $this->getPrice($circle);
    }

    public function getPrice(shape $shape)
    {
        $area = $shape->getArea();
        echo "Total Price is " . ($area * 15) . "$";
    }
}

new index;






?>