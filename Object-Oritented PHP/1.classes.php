<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classes</title>
</head>
<body>
<h1>Classes</h1>
<p>Classes are used in Object Oriented Programming. Imagine a class like a blueprint.</p>
<p>A class has properties which can be variables, arrays and data. It can have functions
    which are called methods since they are inside a class and we call them from the object.</p>
    <p>We create a new object but we can have different values for our properties.
    An object is created when we instantiate the class.</p>
    

<p>Object Oriented Programming makes your code very clean and while it might confuse
you in the beginning, you will love it.
</p>

<p>To have objects we first need to create a class.</p>
<p>Our first class and a function inside the class:</p>

<?php

class User{

 function register(){
        echo "User registered";
    }


}
echo "============================== <br>";
//Checks if class exists
if(class_exists("User")){
 echo "Class exists";
}


//Find all classes that exist in our current php
echo "<br> ============================== <br>";
$my_classes = get_declared_classes();
foreach ($my_classes as $class) {
    echo $class . "<br>";
}



echo "<br> ============================== <br>";
//Check class methods
$the_methods = get_class_methods('User');
foreach ($the_methods as $method) {
    echo $method . "<br>";
}




?>

<p>Now let's instantiate the class so we can use the method. By that we mean that we will
create a new object for that class and with that object we can have the functionality of that class.
</p>

<?php
//Creating a new User(this is an object we created)
$user = new User();

//Checking if method register exists in User class
if(method_exists('User','register')){

    //Register the $user
    $user->register();

}

?>

<p>What we did above was to create a new User and store it in a variable $user which is an object.
    So an object is created when we instantiate the class.
    Then we called the register method for that user.
</p>




</body>
</html>