<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<h1>$_COOKIE</h1>
<p>Cookies are used to send information to the user's browser and then check them
and do stuff according to values. 

</p>
<p>$_COOKIE is a super global.</p>
<p>To set a cookie we use the function setcoookie(" "," "," ") that takes 3 parameters.</p>


<?php

$name = "GOGO";
$value = 10;
//The time() function gives us all the seconds from 1997 to now and we add the expiration
$expiration = time() + (7*24*60*60);//7 days; 24 hours; 60 mins; 60 secs

setcookie($name,$value,$expiration);
?>
<p>Now you can see the cookie in your cookies in your browser.</p>
<p>With cookies we can do stuff depending on them on users browser. If cookie value the do something etc...</p>
<p>TO get the value we use the super global $_COOKIE and check if isset.</p>

<?php
if(isset($_COOKIE["GOGO"])){
    $cookieValue = $_COOKIE["GOGO"];

    echo $cookieValue;

}else{
    $cookieValue = "";
}

?>

<p>Tested in browser with disabled cookies and it shows empty while in cookie enabled browser it shows 10.</p>


</body>
</html>