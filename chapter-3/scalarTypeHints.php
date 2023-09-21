<?php

class index
{
    public function showResult(int $num)
    {
        echo $num;
    }
}

$ind = new index;
$ind -> showResult(43);

?>