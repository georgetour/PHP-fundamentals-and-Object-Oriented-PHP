<?php include "functions.php"; ?>

<?php

    updateRow();

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

<form id="myForm" method="post" action="update_db.php">
    <div class="container">
        <h1>Update selected id user with new data</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input id="username" class="form-control"  type="text" name="username">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" class="form-control" type="password" name="password">
                </div>

                <div class="form-group">
                    
                <select name="id">

                    <?php

                        showAllIds();

                    ?>

                </select>
                </div>
                <div><?php echo $alert; ?></div>
                <input class="btn btn-primary" type="submit" name="update" value="Update">
            </div>
        </div>
    </div><!--End container-->
</form>





</body>
</html>