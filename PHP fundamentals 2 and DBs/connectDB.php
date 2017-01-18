<?php
$pass = 'test1';
$db = 'temp';
$user = 'root';
$db_host = 'localhost';
$dbconnect = @mysqli_connect($host,$user,$pass,$db)OR die("Couldn't connect to database") . mysqli_connect_error();
echo "Connected to $db database" ."<br>";

$question= "SELECT*FROM city_temp";
$result = @mysqli_query($dbconnect,$question);

while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
    echo " CityId " .$row['city_id']." |"
        ." City name " .$row['city_name']." |"
        . " Max temp " .$row['max_temp']." |"
        ." Min temp " . $row['min_temp']." |"."<br>";
}


?>