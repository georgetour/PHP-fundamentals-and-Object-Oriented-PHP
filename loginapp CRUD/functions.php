<?php include "db-connect.php" ?>
<?php

    $alert = "";

    //Insert new user in the table
    function createUser(){
        if (isset($_POST['create'])) {

            global $dbconnect;
            global  $alert;


            $username = $_POST['username'];
            $password = $_POST['password'];


            //Query to database the new user and password

            $query = "INSERT INTO users(username, password)";
            $query .= "VALUES ('$username','$password')";//Concatenate

            $result = mysqli_query($dbconnect, $query);

            if (!$result) {
                die('query failed' . mysqli_error());

            } else {
                $alert = "User created";
                
            }
        }
    }



//Simple read users table
function readUsersTable(){
    global $dbconnect;
    global $result;
    $query = "SELECT * FROM users";

    $result = mysqli_query($dbconnect,$query);

    if(!$result){
        die('query failed' .mysqli_error());

    }
}



//update data row of ids
function updateRow(){
    if(isset($_POST['update'])) {
        global $dbconnect;

        global  $alert;

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        //Updating the column  where selected id
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";// Don't forget , grrrr
        $query .= "password = '$password' ";
        $query .= "WHERE id = '$id' ";


        $result = mysqli_query($dbconnect,$query);
        if(!$result){
            die("Query failed".mysqli_error($dbconnect));
        } else {
            $alert = "Updated user";
        }
    }
}

//This will show ids dynamically in select options
function showAllIds(){
    global $result;
    readUsersTable();

//We will pull dynamically only our ids from db and then show them
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }

}




//Delete row by choosing id
function deleteRow(){
    if(isset($_POST['delete'])){
   
        global $dbconnect;
        global $result;
        global  $alert;
        $id = $_POST['id'];

        //Updating the column  where selected id
        $query = "DELETE FROM users ";
        $query .= "WHERE id = '$id' ";
        
        $result = mysqli_query($dbconnect,$query);
        if(!$result){
        
            die("Query failed".mysqli_error($dbconnect));
        }
        else {
            $alert = "Row deleted";
        }
    }
}






?>