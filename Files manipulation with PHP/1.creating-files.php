<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opening, creating, writing, reading, deleting files</title>
</head>
<body>

<h1>Opening and creating files</h1>

<p>We will use the fopen function that takes two parameters. The first
    what file and the second what to do with that file. Then with fclose we
    close the pointer to our file.

</p>

<?php

//Store the file to a variable
$file = "createdWithPHP.txt";

$handle = fopen($file,'w');

fclose($handle);


?>

<p>Now you can see we have a created file in our folder! The local environment
    behaves differently than our server and needs permissions to be fixed.
</p>
<a href="http://stackoverflow.com/questions/22062266/how-to-give-apache-permission-to-write-to-home-directory"> Give apache permissions to write</a>

