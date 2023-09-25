<?php

require_once "database/DAL.php";

class PDO1 
{
    public function __construct()
    {
        //$db = dbGen::getInstance() -> getCon();
        $dal = new DAL;
        //$dal -> getSingleShop(1);
        //$dal -> getAllShops(1);
        //$dal -> singleShopInsert("Lenovo","192.168.0.108","lenovo","123",1);
        $shops = [
            ["Gshock","192.168.0.109","gshock","123",1],
            ["Omega","192.168.0.110","omega","123",1],
            ["Rolex","192.168.0.111","rolex","123",1],
            ["Asus","192.168.0.112","asus","123",1]
        ];
        //$dal -> multipleShopInsert($shops);
        //$dal -> updateShop(2,"Dior");
        //$dal -> deleteShop(12);
        $dal -> joinData(1);
    }

}


new PDO1;



?>