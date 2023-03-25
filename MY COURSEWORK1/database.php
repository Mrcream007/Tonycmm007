<?php

        $host = "localhost";
        $dbname = "cmm007";
        $username = "root";
        $password = "";

        $sqliconn = new mysqli($host, $username, $password, $dbname);

        if($sqliconn->connect_errno){
            die("Connection error: " . $sqliconn->connect_error);
        }

        

        return $sqliconn;

?>