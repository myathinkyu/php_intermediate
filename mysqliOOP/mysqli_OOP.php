<?php

require_once "vendor/autoload.php";
use app\dbGen;


class index
{
    private $db;

    public function __construct()
    {
        $shops = [
            ["Apple","192.168.0105","apple","123",1],
            ["Remax","192.168.0106","remax","123",1],
            ["Vivo","192.168.0107","vivo","123",1],
            ["Samsung","192.168.0108","samsung","123",1]
        ];

        $this -> db = new dbGen();
        //$this -> db ->getSingleShop(1);
        //$this -> db ->getMultipleShop(1);
        // $this -> db -> getAllData();
        // $this -> db -> insertSingleData("Oppo","192.168.0104","oppo","123",1);
        //$this -> db -> insertMultipleData($shops);
        //$this -> db -> updateShop(5,"Orange");
        //$this -> db -> deleteShop(5);
        //$this -> db -> getJoinData(1);
        $this->db-> fetchAllShops(1);
    }

}


new index;





?>