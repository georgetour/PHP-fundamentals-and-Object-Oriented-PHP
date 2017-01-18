<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>array</title>
<head>
<body>

<h1>My first PHP array</h1>

<?php
$grades=array(5,6,3,7,8,9,10);
for ($counter=0;$counter<=6;$counter++){
 echo " Η τιμή του πίνακα grades[".$counter."] είναι ".$grades[$counter];
 echo"<br>";}
?>
</body>
</html> 