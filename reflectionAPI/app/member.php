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

    //method
    // public function getDetailInfo($args){
    //     //return $this->detailInfo;
    //     //echo "I am being invoked with " . $args[1];
    //     return $args;
    // }

    //parameter
    public function getDetailInfo(string $data="Mg Mg",$info){
            return $this->detailInfo;
    }

    public function setAuth($bol){
        $this->isAuth = $bol;
    }

    public function getAuth(){
        return $this->isAuth;
    }
}











?>