<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Constructor</title>
</head>
<body>

<h1>Constructor</h1>

<p>A constructor is a method that runs when the class is instantiated immediately without having to
    call the method.</p>

<?php

class CreateUser{

protected $username;
protected $password ;


    function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    function showName(){
        return $this->username;
    }


}


?>

<p>And when we instantiate the class we pass directly the parameters.</p>

<?php

$user1 = new CreateUser('George','12345');
echo $user1->showName();
?>

<p>If you don't pass the parameters we will get an error since the constructor says
hey I need parameters.
</p>




</body>
</html>