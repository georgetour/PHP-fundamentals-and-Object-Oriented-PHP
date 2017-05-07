<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classes</title>
</head>
<body>
<h1>Instantiation - Creating objects</h1>


<?php

class User{

 function register(){
        echo "User registered";
    }


}




?>

<p>Now let's instantiate the class so we can use the method. By that we mean that we will
create a new object for that class and with that object we can have the functionality of that class.
</p>

<?php
//Creating a new User(this is an object we created)
$george = new User();

$bob = new User();

//Checking if method register exists in User class
if(method_exists('User','register')){

    //Register the $user
    $george->register();

}

?>

<p>What we did above was to create a new User and store it in a variable $user which is an object.
    So an object is created when we instantiate the class.
    Then we called the register method for that user.
</p>




</body>
</html>