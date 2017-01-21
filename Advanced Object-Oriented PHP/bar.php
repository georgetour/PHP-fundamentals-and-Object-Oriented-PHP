<?php
include 'foo.php';

class Bar extends Foo{
    public $greeting = 'Welcome to the bar';
    
    public function welcome(){
        $this->sayHello();
        echo $this->greeting;
    }


}

$bar = new Bar();
$bar->welcome();


?>