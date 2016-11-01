<?php
//With the include keyword we are bringing another php file
include 'foo.php';
include 'bar.php';

//So now here we user it like we have eveything in this file from foo.php
$foo = new Foo();
$bar = new Bar();


$foo->sayHello();


?>