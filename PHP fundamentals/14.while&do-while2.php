<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>printf</title>
<head>
<body>

<h1>My first PHP page</h1>

<?php
echo "βρόχος με do-while";
$counter=10;
 while ($counter<=5){
 echo " Η τιμή του μετρητή είναι ".$counter;
 echo"<br>";
 $counter++;}
 echo "βρόχος με do-while";
 $counter=10;
 do
{
 echo " Η τιμή του μετρητή είναι ".$counter;
 echo"<br>";
 $counter++;} while ($counter<=5);
?>
</body>
</html> 