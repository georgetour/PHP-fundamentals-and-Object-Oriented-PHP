<?php


//We start by including  form-in.php
include 'form-in.php';

$pass = '';
$user = 'root';
$db_host = 'localhost';
$db = 'cinema';

//Connect with db
$dbc = mysqli_connect($db_host,$user,$pass,$db)  OR die('Database failure connection '.mysqli_connect_error());

//Storing the results from post to variables
$first_name= $_POST['first_name'];
$last_name = $_POST['last_name'];
$email= $_POST["email"];
$phone= $_POST["phone"];
$year = $_POST["year"];
$password=$_POST["password"];
$passwordConfirm=$_POST["passwordConfirm"];
$movie = $_POST["movie"];

//Let's make a flag variable so we can control the rules of filling the form
$flag = 1;

if(empty($password)OR empty($passwordConfirm)){
    echo "Give passwords <br>";
    $flag=0;
}
else {
    echo "Checking fields...<br>";

    if ($password == $passwordConfirm) {
        echo "Passwords match <br>";
        $pass = $password;

        //The SHA1 will encrypt the password one way before it sends it to database and mysqli_real_escape_(stringconnection,escapestring)
        $pass_r = SHA1(mysqli_real_escape_string($dbc, trim($pass)));
    } else {
        echo "Passwords don;t match";
        $flag = 0;
    }
}

if(!empty($first_name)){
    $first_name_r = mysqli_real_escape_string($dbc,trim($first_name));
}
if(!empty($last_name)){
    $last_name_r = mysqli_real_escape_string($dbc,trim($last_name));
}

if(!empty($email)){
    $email_r = mysqli_real_escape_string($dbc,trim($email));
}

if (!empty($phone)) {
    
    $phone_r = mysqli_real_escape_string($dbc,trim($phone));

} else {
    $phone_r = $phone;

}

if (empty($year)) {
    $year_r = NULL;

} else {
    $year_r = $year;

}

if (!empty($movie)) {

    $movie_r = mysqli_real_escape_string($dbc,trim($movie));

} else {
    $movie_r = $movie;

}


if($flag==1) {
    echo "Completed form and will passed in database $db <br>";


//MYSQL query
    $query = "INSERT INTO user(first_name,last_name,email,phone,year,pass,movie)
VALUES ('$first_name_r','$last_name_r','$email_r','$phone_r','$year_r','$pass_r','$movie_r')";//Remember always what u pass in database as strings


//MYSQL query execute
    $r = mysqli_query($dbc, $query);

    if ($r) {
        echo "Registration Completed";
    } else {
        echo "Registration Failure " . $query . "<br>" . mysqli_error($dbc);
    }

    $numa = mysqli_affected_rows($dbc);
    echo "Total $numa affected";

    mysqli_close($dbc);
}

?>




