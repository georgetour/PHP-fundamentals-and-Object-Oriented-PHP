<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>if & switch</title>
<head>
<body>

<h1>if & switch</h1>

<?php
 $grade=7.5;
 if ($grade>=5) {echo "Συγχαρητήρια περάσατε το μάθημα!!!";}
 else {echo "Δυστυχώς θα πρέπει να επαναλάβετε την εξέταση";}
 echo"<br>";
 switch ($grade) {
 case ($grade>=5):
 echo "Συγχαρητήρια περάσατε το μάθημα!!!";
 break;
 default:
 echo "Δυστυχώς θα πρέπει να επαναλάβετε την εξέταση";}
?>

</body>
</html> 