<?php

//=========Create table for the DB==========


$pass = '';
$user = 'root';
$db_host = 'localhost';
$db = 'cinema2';//This variable is our new database we created

////Open a new connection to mysql server
$dbc = mysqli_connect($db_host,$user,$pass,$db) OR die('Database failure connection '.mysqli_connect_error());
echo "Connected to database server" . '<br>';

//Let's create the string with the data for the table for the database
$query = "CREATE TABLE user(
    last_name VARCHAR(40) NOT NULL,
    first_name VARCHAR(40) NOT NULL,
    year SMALLINT UNSIGNED ,
    email VARCHAR(50)NOT NULL,
    phone BIGINT UNSIGNED NOT NULL,
    movie VARCHAR(50) NOT NULL,
    pass VARCHAR(40)NOT NULL
    
)";

//Execution of the query to create the table
$r = mysqli_query($dbc,$query);

//Confirmation for the table creation
if($r){
    echo "Table creation succeeded <br>";
}
else{
    echo "Table creation failure <br>" .mysqli_error($dbc) .'<br>' ;
}

$numr= mysqli_affected_rows($dbc);
echo "You have $numr rows affected";

//Let's close the db
mysqli_close($dbc);




?>