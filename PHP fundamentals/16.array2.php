<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>array</title>
<head>
<body>

<h1>My first PHP array</h1>

<?php
$esoda=array("Δευτέρα"=>2000,"Τρίτη"=>1200,"Τετάρτη"=>6000,"Πέμπτη"=>3230,"Παρασκευή"=>750,"Σάββατο"=>5440);
echo"Εμφάνιση στοιχείων σχετιζόμενων πινάκων<br>";
foreach($esoda as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value."€";
    echo "<br>";
}
?>

</body>
</html> 