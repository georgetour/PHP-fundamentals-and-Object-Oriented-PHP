<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions</title>
</head>
<body>
<h1>Sessions</h1>
<p>Sessions look very similar with cookies but we store information in a file we have in the server
instead of user's browser. It's like saving when you are in an app or game but we do it for them.
When he visits again his experience will be more targeted to him.
</p>

<p>We create a session by using the session_start().</p>

<?php

session_start();
$_SESSION['greetings'] = "Hello again visitor";



?>

<p>Now you can in your browser in your cookies that a PHPSESSID is created.</p>
<p>You can use sessions to keep track of information for user. We can save more data than cookies.</p>
<p>Create a second page which will be called sessions2.php and we will have a value for that user
from sessions main.
</p>

</body>
</html>