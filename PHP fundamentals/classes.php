<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>My first PHP page</title>
    <head>
<body>

<h1>Classes</h1>

<?php

echo date("G");

include "index.html";

class red_car{

    public $car_color = "blue";
}

class customer{
    var $name;
    var $phone;


    function __construct($name,$phone){//This is a method name for the constructor so for every new object for his clas
        //we create
        $this->name = $name;
        $this->phone = $phone;
    }

}

class operations{
    function power5($x){
        $y = pow($x,5);
        return $y;
    }
}



class variables{
public $y=5 ;

    function _global(){
        global $y;//only if you have it like that it will get the $x = 5 else it will return undefined
        echo "Let's test the variable  y =  ".$this->y."<br>";

    }
}

function stat1(){
    static $x = 2;//Με το όρο static η μεταβλητή αποθηκεύεται ξανά και ξανά και δε διαγράφεται η τιμή της
    $x = 5 * $x;
    echo "x=". $x. "<br>";
}

$myfirst_car = new red_car();
$customer =  new customer('John Papas','21045678');
$operation = new operations();
$variable = new variables();



time();

echo "My car color is  $myfirst_car->car_color"."<br>";
echo "My name is $customer->name and my phone is  $customer->phone <br>";
///Or we can write
echo "My name is " .$customer->name . " and my phone is " . $customer->phone ."<br>";

echo "This shows all seconds that have passed from 1η Ιανουαρίου του 1970". time() ."<br>";

$operation->power5=2;

echo "The power of $operation->power5  is ". $operation->power5(2) . "<br>";

$testar = array(1,2,3,4,5);

echo arsort($testar);


$variable->_global();

if(isset($y)){//Με το isset βλέπουμε αν έχει οριστεί η μεταβλητή
    echo "η μεταβλητη y υπάρχει"."<br>";
}
else{
    echo "η μεταβλητη y δεν υπάρχει"."<br>";
}


stat1();
stat1();
stat1();
?>

</body>
</html>