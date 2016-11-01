<?php

//===============Static properties and methods=================
//You don't have to instantiate
//this keyword is not used in static properties or methods

//Static===============================
class User{

    public static $minPassLength = 5;


    public static function validatePassword($password){
        //instead of this we use self:: and strlen is used for the string length
        if(strlen($password) >= self::$minPassLength){
            return true;
        }else{
            return false;
        }

    }

}

$password = 'pass';

//The :: ss called scope resolution operator
if (User::validatePassword($password)){
    echo 'Password is valid'.'<br/>';
}else{
    echo 'Password is not valid'.'<br/>';
}

echo User::$minPassLength . '<br>';

//End static ===================================


//===============Abstract classes================
//Can not be instantiated and they are used directly
//Must be extended by another class
//If a property or method is abstract then the class also must be abstract
abstract class Animal
{
    public $name;
    public $color;


    public function describe()
    {
        return $this->name . ' is ' . $this->color;
    }

    abstract public function makeSound();

}

class Duck extends Animal{
    public function describe()
    {
        //With parent we return from parents the method
        return parent::describe();
    }


    public function  makeSound(){
        return ' Quack';
    }
}

class Lion extends Animal{
    public function describe()
    {
        //With parent we return from parents the method
        return parent::describe();
    }


    public function  makeSound(){
        return 'Grrr';
    }
}

 $animal = new Duck();
 $animal ->name= 'Duffy';
$animal ->color = 'Black';
echo $animal ->describe();
echo $animal->makeSound();






?>