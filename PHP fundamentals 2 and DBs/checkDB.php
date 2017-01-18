<?php
$pass='test1';
$db='gym';
$user='root';
$db_host='localhost';
$dbc = @mysqli_connect ($host, $user,$pass,$db) OR die ('Η σύνδεση στη Βάση Δεδομένων δεν είναι εφικτή. ' . mysqli_connect_error() );
echo " Η σύνδεση ήταν επιτυχής" . "<br>";


$question= "SELECT*FROM athlete";
$result = @mysqli_query($dbc,$question);

$numr = mysqli_num_rows($result);

echo "Επηρεάστηκαν $numr γραμμές"."<br>" ;



//echo $row["athlete_id"]."|".$row["last_name"] . "<br>";
//echo $row2[2] . "|" .$row2[1] . "<br>";

while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
    echo $row['athlete_id'] ."|" .$row ["first_name"]. $row ["last_name"]."<br>";
}
mysqli_free_result($result);//ελευθέρωση resources

mysqli_close($dbc);

?>