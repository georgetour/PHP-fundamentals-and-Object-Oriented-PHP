<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opening, creating, writing, reading, deleting files</title>
</head>
<body>

<h1>Writing to files</h1>
<p>We will use the fwrite function with two parameters with first the file and  second what to write
</p>

<?php

//Store the file to a variable
$file = "createdWithPHP.txt";

if($handle = fopen($file,'w')){

    fwrite($handle,"Written with PHP");

}else{
    echo "Files not accessible or exists";

}




?>





















</body>
</html>

