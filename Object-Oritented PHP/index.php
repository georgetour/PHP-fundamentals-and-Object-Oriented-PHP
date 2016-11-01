<?php

//====Visibility in classes, Access Modifiers=========

//public
//Accessible outside of class, anywhere

//protected
//Accessible in class and any extended classes only

//private
//Accessible only in current class

//======Inheritance=================

//Classes can be extended to a child class
//Child classes will have access to all parents methods
// and properties unless their visibility is set to "private"

//Syntax
class User{

    //Properties or attributes
    public $id;
    public $username;
    protected $email;
    private $password;

    //Constructors
    public function __construct($username,$password){
     //   echo "Constructor started"."<br>";//A constructor is called whenever a class is instantiated
        $this -> username = $username;//With this we refer to current object
        $this -> password = $password;

    }

    public function register(){
        echo "User registered"."<br>";
    }

    public function login(){
        $this->auth_user();//With this we are passing at auth_user the values from login
    }

    public function auth_user(){
        echo $this->username." is authenticated "."<br>";
    }

    //Destructors
    public function __destruct(){
      //  echo "Destructor started"."<br>";
    }

}

//Instantiate & Use a Class
$user = new User("George","1234");


//Call a function/method
$user->register();
$user->login();

echo $user->username."<br/>";

//===================
//echo $user->password;//It doesn't let you take the private
//echo $user->email;//It doesn't let you take the protected


//======== __get __set __isset magic methods
class Post{
    private $name;

    //We are setting to name the value
    public function __set($name,$value)
    {
        // TODO: Implement __set() method.
        echo "Setting " .$name.' to <strong>'.$value .'</strong><br/>';
        $this->name = $value;

    }

    //We are getting the value
    public function __get($name)
    {
        // TODO: Implement __get() method.
        echo "Getting " .$name.'  <strong>'.$this->name .'</strong><br/>';
    }

    //__isset() is triggered by calling isset() or empty() on inaccessible properties.
    public function __isset($name)
    {
        // TODO: Implement __isset() method.
        echo "Is ".$name.' set?<br/>';
        return isset($this->names);
    }


}
//With the above code we can access private properties
$post = new Post();

//Here we are setting the value
$post -> name = 'Testing';

//If we haven't declare the value above we get empty
echo $post -> name ;

//var_dump — Dumps information about a variable
echo '<pre>'.var_dump(isset($post->names)).'</pre>';




//===========Class inheritance=============
//With inheritance child class inherits all properties and methods from tis parent class
class First{
    public $id = 23 .'<br/>';
    protected $name = 'John Doe' .'<br/>';

    public function saySomething($word){
        echo $word;
    }
}




class Second extends First{

    public function getName(){
        echo $this->name;

    }

}

$second = new Second();
echo "Protected Parent name ". $second->getName() ."Parent id ". $second->id ;
$second->saySomething('Hi from parent');





?>