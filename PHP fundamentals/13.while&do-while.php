<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Βρόχος με while</title>
<head>
<body>

<h1>Βρόχος με while</h1>

<?php
echo "βρόχος με while";
$counter=1;
 while ($counter<=5){
 echo " Η τιμή του μετρητή είναι ".$counter;
 echo"<br>";
 $counter++;}
 echo "βρόχος με do-while";
 $counter=1;
 do
{
 echo " Η τιμή του μετρητή είναι ".$counter;
 echo"<br>";
 $counter++;} while ($counter<=5);
?>
</body>
</html> 