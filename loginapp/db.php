<?php


//Database variables to call
$db_host = 'localhost';
$user = 'root';
$pass = '';
$db = 'loginapp';

//Connect to database
$dbconnect = mysqli_connect($db_host,$user,$pass,$db)  OR die('Database failure connection '.mysqli_connect_error());
if(!$dbconnect){
    die("Database failure");
}

?>