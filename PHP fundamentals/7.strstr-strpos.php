<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>strstr & strpos</title>
<head>
<body>

<h1>strstr & strpos</h1>

<?php
 $x="My first PHP page";
 echo "το μήκος της αλφαριθμητικής είναι. ".strlen($x);
 echo " Η θέση του χαρακτήρα g είναι".strpos($x,"g");
 echo "<br>";
 $y=strstr($x,"r");
echo $y;
?>

</body>
</html> 