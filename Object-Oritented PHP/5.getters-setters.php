<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Getters and Setters</title>
</head>
<body>
<h1>Getters and Setters</h1>
<p>We built one method that's able to give us values(get) and one that will set values.</p>
<p>Usually pulled from a private property in the class.</p>

<?php

class User{
	
	private $name ="bill";

	function get_name(){
		echo $this->name;
	}
	
	//If we call this function the $name will change to george
	function set_name(){
		
		$this->name = "george";
	}
	
	

}

$user = new User();

$user-> set_name();

$user-> get_name();


?>

</body>
</html>