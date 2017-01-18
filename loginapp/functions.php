<?php include "db.php" ?>
<?php


//Query to database the new user and password

function showAllIds(){
global $dbconnect;//Without this we get error since it can 't find the variable
    
$query = "SELECT * FROM users";

$result = mysqli_query($dbconnect,$query);

if(!$result){
    die('query failed' .mysqli_error());

}

//We will pull dynamically only our ids from db and then show them
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];

    echo "<option value='$id'>$id</option>";
}

}


?>