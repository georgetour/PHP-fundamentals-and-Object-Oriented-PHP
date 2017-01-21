<?php
class Xelonakia{

    //With the keyword final it means that this is is the final and can't be
    // overwritten from other class
    function howAreYou(){
        echo 'Hello xelonaki how are you?';
    }

    function happy(){
        echo 'I m happy';
    }


    function sad(){
        echo 'I m sad';
    }
}

$xelonaki1 = new Xelonakia();
$xelonaki2 = new Xelonakia();

$xelonaki1->howAreYou();
$xelonaki2->happy();








?>