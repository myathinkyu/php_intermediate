<?php

class index{
    public function doIt($finish)
    {
        $i = 0;
        $sum = 0;
        while ($i < 10000) {
            $sum += $i;
            $i++;
        }
        $this -> $finish($sum);
    }

    public function finish($total) 
    {
        echo "All is $total";
    }
}

$ind = new index;
$ind -> doIt("finish");

?>