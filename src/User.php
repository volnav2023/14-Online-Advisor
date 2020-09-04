<?php

namespace App;

class User
{
    public function test()
    {
        echo "Ici User::test() called";
    }
    public function create($MailAddress,$Password)
    {
        $sql = "INSERT INTO `user`(`MailAddress`, `Password`, `LastLogTimeStamp`) VALUES ('" . $MailAddress . "', '" . $Password . "','1000-01-01 00:00:00')";
        
        echo $sql . "<br>";

        $dbase->query($sql);
    }
}
