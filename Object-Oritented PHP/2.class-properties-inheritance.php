<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class Properties and Inheritance</title>

</head>
<body>
<h1>Class Properties and Inheritance</h1>
<h2>Class Properties</h2>
<p>Classes have properties which as we said are variables, arrays or data.</p>
<p>Before php 5 we had to declare a variable inside a class like that : var $userID = 1; .
    From php 5 and above var keyword is deprecated and we have properties/methods visibility.</p>
    <p>We use the following keywords for visibility:</p>
<ol>
    <li>public - Can be accessed anywhere from other classes and instances of the object </li>
    <li>private - Accessible only in current class</li>
    <li>protected - Accessible inside class that declared and class that inherit from parent(check inheritance)</li>
</ol>

<h2>Inheritance</h2>
<p>We learned about classes and you created your first object now we will talk about inheritance.</p>
<p>Inheritance is a fundamental topic about OOP.</p>
<p>It's pretty simple and cool. Inheritance is when a child class inherits from parent class
    some or all characteristics.
</p>

<p>It is like real life when a child takes the blue eyes, height or other stuff
    from the parent. Imagine that the blue eyes or the height he/she took were properties of the parent.</p>


<p>By using child classes we don't have to write again repeating code and stuff that parent class
    already has for us.
</p>

<p>Let's create a Superhero class that will have some properties and methods:
</p>


<?php

class Superhero
{

    public $name;
    private $id;
    protected $power;


    //We can give id value in here with a parameter but to use the id we can do it only
    //by calling the function since $id is private
    function aboutHero($realID)
    {
        $this->id = $realID;
        return $this->id;
    }


    function attack($usedPower)
    {
        $this->power = $usedPower;
        echo $this->name . "uses " . $this->power;
    }

}
?>
    <p>With $this keyword we are referring to current class. It's used so we can use properties
        in a method.</p>

    <p>Now we will create this hero and give his properties values:</p>

    <?php

$superman = new Superhero();
$superman->name = "Superman ";
$superman->aboutHero("Clark Kent");
$superman->attack("Superhuman strength");


?>

<p>You can only access the name property which is public and the public functions. It would be unsafe for everybody to know
    his real id so you can access it only by the function aboutHero .
</p>

<p>But super villains exist and they have names and powers also! </p>
<p>So why write again everything for Superhero.</p>
<p>That's why we have inheritance. We just use the keyword extends. Check the code at our php:</p>

<?php

class Supervillain extends Superhero {

    public $weakness;


}

?>

<p>And now let's create a super villain.</p>
<?php



$doomsday = new Supervillain();
$doomsday->name = "Doomsday ";
$doomsday->attack("Super power and size");

?>

<p>As you can see we have inherited public and protected properties/methods but not private.
    The $weakness though is only for Supervillain class and Superhero has nothing to do with it. </p>






</body>
</html>