<?php

session_start();

include_once 'database.php';
$sessionid =  $_SESSION['id'];

$filename = "./assets/images".$sessionid."*";
$fileifo = glob($filename);

//print_r($fileifo);

$fileext = explode(".", $fileinfo[0]);


//print_r($fileext);

$fileactualext = $fileext[1];
$file = "./assets/images".$sessionid.".".$fileactualext;

if (!unlink($file)){
    echo "file was not deleted!";
}
else{
    echo "file was deleted!";
}

$sql = "UPDATE images SET status =1 WHERE userid=''$sessionid';";

mysqli_query( $sqliconn,$sql);

header("Location: poststory.php?deletedsuccessfully");