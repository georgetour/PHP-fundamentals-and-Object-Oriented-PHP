<?php

    //Functions
    function greet(){
        echo "Hello from function!"."<br>";
    }

    greet();

    //Function with parameters
    function hello($text){
        echo "Hello".$text."<br>";
    }
    hello(" parameter!");

    //Function with more parameters
    function hello2($greeting,$name){
        echo $greeting." ".$name."<br>";
    }
    hello2("Hello","George");

    //Conditional statemtents
    $num = 100 ;
    $num2 = 99;
    if($num!=99){
        echo "It's 100"."<br>";

    }

    if ($num > $num2){
        echo $num." It's bigger than ".$num2 ."<br>";
    }
    else if ($num2 > $num){
    echo $num2." It's bigger than ".$num ."<br>";
    }
    else{
        echo "They are equals!" ."<br>";
    }

    //Operators

    //One equal Assignment operator
    $a = 5 ;

    //Two Equals operators that does type conversion
    $b ='5';
    if($a == $b) {
        echo "They are equals"."<br>";

    }

    //Three equals checks if they are the same type also
    if($a === $b) {
        echo "They are equals"."<br>";
    }
    else {
        echo "They are not the same type"."<br>";
    }

    //Write here || &&
    ////////////////////////////////////////
    ////////////////////////////////////////

    //If you put the ! before means is not
    ////////////////////////////////////////
    ////////////////////////////////////////

?>