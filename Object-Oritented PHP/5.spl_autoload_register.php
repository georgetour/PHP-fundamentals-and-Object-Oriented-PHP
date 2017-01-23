<?php

//With spl_autoload_register we load all classes so we don't say include include again and again
spl_autoload_register(function($class_name){
    include $class_name .'.php' ;
});


$foo = new Foo();
$bar = new Bar();

$foo ->sayHello();





?>