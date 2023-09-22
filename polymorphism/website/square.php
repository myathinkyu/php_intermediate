<?php

namespace website;
use website\gern\shape;

class square implements shape
{
    private $width, $height;

    public function __construct($width, $height) {
        $this-> width = $width;
        $this-> height = $height;
    }
 
    public function getArea()
    {
        return $this->width * $this->height;
    }
}

?>