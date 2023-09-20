<?php

$ary = [
    ["One","Two","Three","Four"],
    ["One","Two","Three","Four"],
    ["One","Two","Three","Four"],
    ["One","Two","Three","Four"], 
    ["One","Two","Three","Four"]
];



$data = serialize($ary);
echo $data;
echo "<hr>";
$normal = unserialize($data);
echo "<pre>". print_r($normal,true). "</pre>";


?>