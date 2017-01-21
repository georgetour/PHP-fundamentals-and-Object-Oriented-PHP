<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET-POST</title>
</head>
<body>

<section>
<h1>$_GET</h1>
<p>If you search in google colors we will get that in address bar:</p>
<p>https://www.google.gr/search?q=colors&ie=utf-8&oe=utf-8&client=firefox-b-ab&gfe_rd=cr&ei=al-DWI74HKve8geNuZ6wDg</p>
<p>The & is the divider and we have values for client etc...</p>
<p>$_GET super global is available anywhere in our document as long as we pass parameters in our url.</p>
<p>PHP super globals convert the data to an associative array that's why we can show them with print_r.

</p>

<p>Let't create that with a link:</p>
<a href="get-post.php?id=2&yourock=George">Click here to change the address with id=2 and yourock=George</a>
    <p>And drag the id's value with $_GET:</p>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
};

?>
    <p>You can see at out address when we click the change.</p>


<p>Insert it dynamically:</p>
<?php

$id = 30;

?>

<p>Let't create that with dynamic data:</p>
<a href="get-post.php?id=<?php echo $id;?>">Click here to change the address with dynamic data</a>
</section>

<section>
    <h1>$_POST</h1>


    <p>Let's create a form and take data from it with POST.</p>

    <form action="get-post.php" method="post">
        <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
    <?php

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        echo $name;
    }
    ?>

</section>










</body>
</html>