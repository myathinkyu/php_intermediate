<?php

namespace app;

use mysqli;

class dbGen
{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS= "";
    const DB_NAME = "restaurant";

    private $con;

    public function __construct()
    {
        $this -> con = new \mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_NAME);
    }

    public function getSingleShop($id){
        $statement = $this -> con -> prepare("SELECT * FROM shops WHERE id=?");
        $statement -> bind_param('i', $id );
        $result = $statement -> execute();
        $statement -> bind_result($id,$name,$ipadd,$username,$password,$state,$created_at);

        while($statement -> fetch()){
            echo $id ."<br>". $name."<br>".$ipadd. "<br>";

        }
    }

    public function getMultipleShop($state)
    {
        $stmt = $this ->con-> prepare("SELECT * FROM SHOPS WHERE state=?");
        $stmt-> bind_param("i",$state);
        $result = $stmt->execute();
        $stmt -> bind_result($id,$name,$ipadd,$username,$password,$state,$created_at);

        while($stmt->fetch()){
            echo $id ."<br>".$username . "<br>". $password."<br>".$state."<br>". $created_at;
            echo "<hr>";
        }
    }

    public function getAllData(){
        $result = $this->con->query ("SELECT * FROM shops");

        while($row = $result-> fetch_object()){
            echo $row -> name ;
            echo "<hr>";
        }
    }

    public function insertSingleData($name,$ipadd,$user,$pass,$state){
        $datetime = date("Y-m-d H:m;s");
        $stmt = $this->con-> prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at)
        VALUES (?,?,?,?,?,?) ");
        $stmt -> bind_param('ssssis',$name,$ipadd,$user,$pass,$state,$datetime);
        $result = $stmt->execute();
        echo $result ? "Data Insert Successfully!" : "Data Insert Fail!" ;
    }

    public function insertMultipleData($shops){
        $datetime = date("Y-m-d H:m;s");
        $stmt = $this -> con -> prepare("INSERT INTO shops(name,ipadd,username,password,state,created_at)
        VALUES (?,?,?,?,?,?)");
        foreach ($shops as $shop) {
            $stmt -> bind_param ('ssssis', $shop[0], $shop[1], $shop[2], $shop[3], $shop[4], $datetime);
            $result = $stmt->execute();
            $lastinsertid = $stmt -> insert_id;
            echo " Successfully insert " . $shop[0] . " with id of ". $lastinsertid;
            echo "<br>";
        }

    }

    public function updateShop($shopid,$name){
        $stmt = $this -> con -> prepare ("UPDATE shops SET name=? WHERE id=?");
        $stmt -> bind_param("si" , $name, $shopid);
        $result = $stmt->execute();
        echo $result;
    }

    public function deleteShop($shopid){
        $stmt = $this-> con -> prepare ("DELETE FROM shops WHERE id=?");
        $stmt -> bind_param("i", $shopid);
        $result = $stmt->execute();
        echo $result;
    }
}



?>