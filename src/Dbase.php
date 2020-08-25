<?php

namespace App;

class Dbase
{
    private $conn;
    private $sql;

    public function open($serverName, $dbName, $userName, $password)
    {
        try {
            $this->conn = new \PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            echo "Dbase connected successfully";
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function query($sqlQuery = null)
    {
        $this->sql = 

    }
}
