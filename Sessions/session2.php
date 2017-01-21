<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions Call</title>
</head>
<body>
<h1>Sessions Call</h1>
<p>We will take data from sessions page for specific user by having in pages session_start().</p>

<p  style="color:red">

<?php
session_start();
if(isset($_SESSION['greetings'])){
    echo "If cookies enabled we get from session1.php: ". $_SESSION['greetings'];
}
?>
</p>

<p>We receive the message since we visited session1 but if have disabled cookies we get nothing. </p>
</body>
</html>