<?php

abstract class dbAbstract{
    private $db;
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;

    public function __construct($db_host,$db_name,$db_user,$db_pass)
    {
        $this -> db_host = $db_host;
        $this -> db_name = $db_name;
        $this -> db_user = $db_user;
        $this -> db_pass = $db_pass;
    }
    

    abstract public function connect();

    abstract public function disconnect();
    
    abstract public function fetchData($table, $modifier);
}










?>