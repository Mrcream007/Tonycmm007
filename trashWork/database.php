<?php
//this file contains all the database connection code for my login/signup page

    //Creating the variables for the data base with mysql which we must have created
    $host = "localhost";
    $dbname = "cmm007a";
    $username = "root";
    $password = "";

    //This connect it the the mysql database
    $mysqli = new mysqli($host, $username, $password, $dbname);

    //checking for connection error
    if($mysqli->connect_errno) {
        die("Connection error: " . $mysqli->connect_error);
    }

    return $mysqli;
?>