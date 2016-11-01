<?php

class People{
    public $person1 ='Mike';
    public $person2 ='Kelly';
    public $person3 ='Bee';

    protected $person4 = 'Shadow';
    private $person5 = 'Dark';

    function iterateObject(){
        foreach ($this as $key => $value){
            print "$key = $value \n" ;
        }
    }
}

$people = new People();
$people->iterateObject();


//But if you use it without calling the function it will give us only the public keys and values
foreach ($people as $key=>$value){
    print "$key = $value \n" ;
}





?>