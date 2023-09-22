<?php

namespace website;
use website\gern\shape;

class circle implements shape
{
    private $radius;
    
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }

    public function getArea()
    {
        return $this->radius * $this->radius * pi();
    }
}

?>