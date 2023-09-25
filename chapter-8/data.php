<?php

require_once "dbAbstract.php";

class data extends dbAbstract
{ 
    public function __construct($db_host, $db_name, $db_user, $db_pass)
    {
        parent::__construct($db_host, $db_name, $db_user, $db_pass);
    }

    public function connect()
    {
        if($this -> db == null)
        $this -> db = new PDO("mysql:host=". $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
        
        return $this->db;
    }

    public function disconnect()
    {
        if($this->db != null)
        $this -> db = null;
    }

    public function fetchData($table, $modifier)
    {
        $stmt = $this->db->prepare("SELECT * FROM students WHERE id=:id");
        $stmt -> bindParam(":id", $modifier);
        $result = $stmt -> execute();
        if($result)
            return $stmt -> fetchAll(PDO::FETCH_OBJ); 
        else
            return null;         
    }
}

$data = new data("localhost","test","root","");
$data-> connect();
$fdata = $data ->fetchData("students",3);
if($fdata != null )
    echo $fdata[0]->name;
?>