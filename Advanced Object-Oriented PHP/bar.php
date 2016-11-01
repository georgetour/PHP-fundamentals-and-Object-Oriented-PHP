<?php
class Bar extends Foo{
    public $greeting = 'Welcome to the bar';
    
    public function welcome(){

        echo $this->greeting;
    }


}


?>