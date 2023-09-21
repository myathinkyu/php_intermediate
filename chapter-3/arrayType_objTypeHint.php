<?php

//array type
// class index
// {
//     public function takeResult(array $num)
//     {
//         var_dump($num);
//     }
// }

// $ind = new index;
// $ind -> takeResult(["pen","box","snack","bottle"]);


//object type
class test
{

}

class index
{
    public function getResult(test $num)
    {
        var_dump($num);
    }
}

$t = new test;
$ind = new index();
$ind -> getResult($t);


?>