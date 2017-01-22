<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Static</title>
</head>
<body>

<h1>Static</h1>

<p>When we use the static keyword we don't have to instantiate the class to call this
    property/method but we can get it directly from the class and not the instance.</p>

<?php

class CreateUser{

    static $username = "Static George";

}


?>

<p>And the syntax is CreateUser::$username; . The same syntax is used in a method.</p>

<?php
echo CreateUser::$username;

?>





</body>
</html>