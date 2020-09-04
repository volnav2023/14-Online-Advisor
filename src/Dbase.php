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
            echo "Dbase connected successfully<br>";
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function query($sqlQuery)
    {
        $count = '10';
        $sql = "INSERT INTO `user`(`MailAddress`, `Password`, `LastLogTimeStamp`) VALUES ('" . $count . "@flechet.com', '" . $count . "pwd','1000-01-01 00:00:00')";
        echo $sqlQuery . "<br>";

        $this->conn->query($sqlQuery);

        $sql = 'SELECT * FROM `user` WHERE 1';

        // $this->conn->query($sql);
        // echo "Select done<br>";

        foreach ($this->conn->query($sql) as $row) {
            print $row['MailAddress'] . "\t";
            print $row['Password'] . "\t";
            print $row['LastLogTimeStamp'] . "<br>";
        }
    }
}
