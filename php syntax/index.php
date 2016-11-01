<?php

//Variables always $ before
$text = 'hello';
$text2 = 'hello2';

//Concatenation just add a .
echo $text." ".$text2 . "<br>";

//Arrays
$numbers = array(1 ,2 ,3 ,4);
//or
$numbers2 = [1,2,3,4];

//Prints the whole array
print_r($numbers);

//Arrays are zero based and with [] which is the index we are choosing what we want
echo $numbers[1]. "<br>";


//Associative arrays
$age  = array(
    "John" => 35,
    "Bee" => 24,
    "Sakuyra" => 20

);

//Uses the last value
echo array_pop($age);

//Uses the first value
echo array_shift($age)."<br>";


//Loops
for($i=0; $i<=5; $i++){
    echo $i;
}

$i=0;
while ($i<=10){
    echo $i."<br>";
    $i++;
}

//Used  for arrays
foreach($age as $name => $showeage){
    echo "Name ".$name."Age"." ".$showeage;

}


?>

