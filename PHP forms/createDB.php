<?php

$pass = '';
$user = 'root';
$db_host = 'localhost';


//Open a new connection to mysql server
$dbc = mysqli_connect($db_host,$user,$pass) OR die('Database failure connection '.mysqli_connect_error());
echo "Connected to database server" . '<br>';

//Variable that will store the string for creating the database in the query below
$q = 'CREATE DATABASE cinema';

//You will execute the query to create the database.
$r = mysqli_query($dbc,$q);

//Let's test if it succeeded
if($r){
    echo ('Δημιουργήσατε τη βάση δεδομένων');

}
else{
    echo 'error '.$q.'<br>'.mysqli_error($dbc) .'<br>';
}


mysqli_close($dbc);
?>