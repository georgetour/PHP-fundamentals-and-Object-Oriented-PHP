<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opening, creating, writing, reading, deleting files</title>
</head>
<body>

<h1>Reading files</h1>
<p>We will use the fread function with two parameters with first the file and  second the bytes which each byte is
    is a character.
</p>

<?php

//Store the file to a variable
$file = "createdWithPHP.txt";

if($handle = fopen($file,'r')){

    //if you want to read the whole file you use the function filesize() and parameter the file
echo  $readContent =  fread($handle,filesize($file));

}else{
    echo "Files not accessible or exists";

}




?>





















</body>
</html>

