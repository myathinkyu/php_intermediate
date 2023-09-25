<?php

namespace app;  

class member
{
    private $isAuth = false;
    private $detailInfo = [
        "name" => "Mg Mg",
        "age" => 20,
        "school" => "Yangon"
    ];

    public function getDetailInfo($args){
        return $this->detailInfo;
        //echo "I am being invoked with " . $args[0];
        //return $args;
    }

    public function setAuth($bol){
        $this->isAuth = $bol;
    }

    public function getAuth(){
        return $this->isAuth;
    }
}











?>