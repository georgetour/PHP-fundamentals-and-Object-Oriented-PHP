<?php

//Returns the file with full path
echo __FILE__."<br>";


//Returns what line the code is
echo __LINE__ ."<br>";


//Directory
echo __DIR__ ."<br>";


//Checks if file or directory exisats
if(file_exists(__DIR__)){

    echo "yes" ."<br>";

}


//Checks if is file
if(is_file('magic_constants.php')){

    echo "yes" ."<br>";

}else{

    echo "no" ."<br>";
}

//Checks if is directory
if(is_dir('magic_constants.php')){

    echo "yes" ."<br>";

}else{

    echo "no" ."<br>";
}

//Ternary operator
echo file_exists(__DIR__)? "yes" : "no";


























?>