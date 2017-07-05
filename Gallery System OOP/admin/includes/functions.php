<?php


//Checking if class file exists so we can autoload it
//autoload is deprecated and we should use spl_autoload_register
//function __autoload($class){
//
//
//    $class = strtolower($class);
//    $the_path = "includes/{$class}.php";
//
//
//    if(file_exists($the_path)){
//        require_once($the_path);
//    }else{
//        die("This file name {$class}.php doesn't exist");
//    }
//
//}


//***************Checking if class file exists so we can autoload it in case we forget to include the class **************
function classAutoLoader($class){


    $class = strtolower($class);
    $the_path = "includes/{$class}.php";


    if(is_file($the_path) && !class_exists($class)){
        require_once($the_path);
    }else{
        die("This file name {$class}.php doesn't exist");
    }



}

spl_autoload_register('classAutoLoader');



?>