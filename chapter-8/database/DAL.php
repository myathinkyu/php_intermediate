<?php

require_once "dbGen.php";

class DAL
{
    private $db;
    
    public function __construct()
    {
        $this -> db = dbGen::getInstance() -> getCon();
    }

    public function getSingleShop($id){
        $stmt = $this-> db -> prepare("SELECT * FROM shops WHERE id=:id ");
        $stmt -> bindParam(":id",$id);
        $stmt -> execute();
        $stmt -> bindColumn("name",$name);
        $stmt -> bindColumn("ipadd",$ipadd);
        $stmt -> bindColumn("created_at",$created_at);
        $stmt -> bindColumn("username",$username);
        $result = $stmt -> fetchObject();

        echo $result-> name . "<br>" . $result -> ipadd . "<br>" . $result -> created_at . "<br>" . $result -> username;

    }

    public function getAllShops($state) {
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE state=:state");
        $stmt -> bindParam(":state", $state);
        $stmt-> execute();
        //$result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        $result = $stmt -> fetchAll(PDO::FETCH_OBJ);
         
        foreach ($result as $item) {
            // echo $item["name"] . "<br>";
            // echo $item["ipadd"] . "<br><hr>";

            echo $item -> name . "<br>";
            echo $item -> ipadd;
            echo "<hr>";
        }
    }

    public function singleShopInsert($name,$ipadd,$username,$password,$state){
        $datetime = date("Y-m-d H:m:s");
        $stmt = $this -> db -> prepare("INSERT INTO shops(name,ipadd,username,password,state,created_at)
        VALUES (:name,:ipadd,:username,:password,:state,:created_at)");

        $stmt -> bindParam(":name",$name);
        $stmt -> bindParam(":ipadd",$ipadd);
        $stmt -> bindParam(":username",$username);
        $stmt -> bindParam(":password",$password);
        $stmt -> bindParam(":state",$state);
        $stmt -> bindParam(":created_at",$datetime);

        $result = $stmt -> execute();
        $insertid = $this -> db -> lastInsertId();
        
        echo $result ? "success inserting ". $insertid : "fail inserting";

    }

    public function multipleShopInsert($shops){
        $datetime = date("Y-m-d H:m:s");
        $stmt = $this -> db -> prepare ("INSERT INTO shops (name,ipadd,username,password,state,created_at)
        VALUES (:name,:ipadd,:username,:password,:state,:created_at)");

        foreach ($shops as $shop){
            $stmt -> bindParam(":name",$shop[0]);
            $stmt -> bindParam(":ipadd",$shop[1]);
            $stmt -> bindParam(":username",$shop[2]);
            $stmt -> bindParam(":password",$shop[3]);
            $stmt -> bindParam(":state",$shop[4]);
            $stmt -> bindParam(":created_at",$datetime);

            $result = $stmt -> execute();
            $lastid = $this -> db -> lastInsertId();
            echo $result ? "Data id " . $lastid. " is inserted successfully <br> " : "Data Insert Fail <br>";
        }
    }
 
    public function updateShop($id,$name){
        $stmt = $this -> db-> prepare ("UPDATE shops SET name=:name WHERE id=:id");
        $stmt -> bindParam(":name", $name);
        $stmt -> bindParam(":id", $id);
        $result = $stmt -> execute();
        echo $result ? "success updating ": "fail updating";
    }
    
    public function deleteShop($id){
        $stmt = $this -> db-> prepare ("DELETE FROM shops WHERE id=:id");
        $stmt -> bindParam(":id", $id);
        $result = $stmt -> execute();
        echo $result ? "success deleting ": "fail deleting";
    }

    public function joinData($shopid){
        $stmt = $this -> db -> prepare("
        SELECT 
            sh.name as name,
            sh.ipadd as ipadd,
            SUM(od.price * od.amount) as total
        FROM
            shops as sh
        LEFT JOIN
            orders as od
        ON
            od.shopid = sh.id
        WHERE 
            sh.id = :id AND sh.state = 1
        ");

        $stmt -> bindParam(":id", $shopid);
        $stmt -> execute();
        $stmt -> bindParam("name",$name);
        $stmt -> bindParam("ipadd",$ipadd);
        $stmt -> bindParam("total",$total);
        $result = $stmt-> fetchObject();

        echo $result->name ."<br>";
        echo $result->ipadd ."<br>";
        echo $result->total ."<br>";
    }
}

?>