<?php include "functions.php"?>

<?php

    readUsersTable();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login app</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="../assets/bootstrap.min.css" rel="stylesheet" type="text/css">


</head>
<body>


    <div class="container">
        <h1>Reading from users table and showing them</h1>
        <div class="row">
            <div class="col-sm-6">
                <?php
                    //Search for all associate arrays in users
                    while($row = mysqli_fetch_assoc($result)) {
                    
                ?>

                <pre>
                    <?php print_r($row) ?>

                </pre>
                <?php
                }//End of while
                ?>


            </div>
        </div>
    </div><!--End container-->






</body>
</html>

