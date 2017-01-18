<?php
if (isset($_POST['register'])){

//Store our post data to variables
    $username = $_POST['username'];
    $password = $_POST['password'];


    //Database variables to call
    $db_host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'loginapp';

    //Connect to database
    $dbconnect = mysqli_connect($db_host,$user,$pass,$db)  OR die('Database failure connection '.mysqli_connect_error());
    if($dbconnect){
        echo "connected";
    }
    else{
        die("Database failure");
    }

    //Query to database the new user and password

    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username','$password')";//Concatenate

    $result = mysqli_query($dbconnect,$query);

    if(!$result){
        die('query failed' .mysqli_error());

    }

}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login app</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="../assets/bootstrap.min.css" rel="stylesheet" type="text/css">


</head>
<body>

<form id="myForm" method="post" action="register.php">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input id="username" class="form-control"  type="text" name="username">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" class="form-control" type="password" name="password">
                </div>

                <input class="btn btn-primary" type="submit" name="register" value="Register">


            </div>
        </div>
    </div><!--End container-->
</form>





</body>
</html>