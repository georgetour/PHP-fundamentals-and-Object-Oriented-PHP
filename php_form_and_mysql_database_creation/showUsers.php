<?php
include "htmlUsers.php";//First we are including something to show from another page

$pass = '';
$user = 'root';
$db_host = 'localhost';
$db = 'cinema';

//Connecting to database
$dbc = mysqli_connect($db_host,$user,$pass,$db)OR die ("Database connection failure").mysqli_error();
echo "Connected to db $db";


//Query for database
$query = "SELECT *FROM user";

//Executing the query
$r = mysqli_query($dbc,$query);

$numa = mysqli_num_rows($r);
if($numa >0){
    echo "<p>Number of registered users $numa </p>";


echo "<table>";

echo '<tr style="background-color:greenyellow;color:red;">'
    ."<th>"."Επίθετο"."</th>"
    ."<th>"."Όνομα"."</th>"."<th>"."email"
    ."</th>"."<th>"."phone"."</th>"
    ."<th>"."Ετός γέννησης"."</th>"
    ."<th>"."Movie preference"."</th>"
    ."</tr>";

while ($row = mysqli_fetch_array($r, MYSQLI_BOTH)) {
    echo '<tr style="background-color:greenyellow; color: red;">'
        ."<td>" .$row['last_name']."</td>"
        ."<td>". $row['first_name']."</td>"
        ."<td>".$row['email']."</td>"
        ."<td>".$row['phone']."</td>"
        ."<td>".$row['year']."</td>"
        ."<td>".$row['movie']."</td>"."</tr>";
}
echo "</table>";
mysqli_free_result ($r);
}
else {
    echo '';
    mysqli_free_result($r);
}
mysqli_close($dbc); //Διακοπή σύνδεσης με ΒΔ


?>