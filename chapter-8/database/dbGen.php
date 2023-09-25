<?php

class dbGen
{
    const DB_HOST = "localhost";
    const DB_NAME = "restaurant";
    const DB_USER = "root";
    const DB_PASS= "";
    
    private $con;
    private static $instance;


private function __construct()
    {
        try {
            $this->con = new PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::DB_USER, self::DB_PASS);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ($this->con) {
                echo "Database successfully connected<hr>";
            }
        } catch (Exception $e) {
            echo "Custom error is <br>" . $e->getMessage();
        }
    }
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new dbGen();
        }
        return self::$instance;
    }
    public function getCon()
    {
        return $this->con;
    }
}

?>