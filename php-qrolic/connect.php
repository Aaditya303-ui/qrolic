<?php 

namespace database;

use Exception;
use PDO;

class Database{
    private $host = "localhost";
    private $user = "root";
    private $port = 3307;
    private $db = "workingDb";
    private $pass = "";
    private $connection;

    public function connect(){
        try{
            $dsn = "mysql:host=".$this->host.";dbname=".$this->db.";port=".$this->port;
            $this -> connection = new PDO($dsn,$this->user,$this->pass);
            $this -> connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $this -> connection;
        }catch(PDOException $e){
             die("Connection failed: " . $e->getMessage());
        }
    }
}