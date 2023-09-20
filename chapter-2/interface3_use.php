<?php

use Index as GlobalIndex;

require_once "sheInter.php";
require_once "heInter.php";

class Index implements sheInter, heInter{

    private $data;
    public function sheGotoSchool($data)
    {
        $this ->data = $data;
    }
    public function heGotoSchool($data)
    {
        $this ->data = $data;
    }
    public function output()
    {
        echo "<pre>" .print_r($this ->data,true) . "</pre>";
    }
    public function busy()
    {
        echo "This person is busy with ". $this->data[count($this->data)-1];
    }

}

$obj = new Index;
$sheAry = ["book","pen","bag","ruler"];
$heAry = ["book","pen","bag","eraser"];
$obj -> sheGotoSchool($sheAry);
$obj -> output();
$obj -> busy();

$bb = new Index;
$bb -> heGotoSchool($heAry);
$bb -> output();
$bb -> busy();


?>