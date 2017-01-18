<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first form with PHP</title>
    <style>
        .someMargin{

            margin-left: 20px;
            resize: none;

        }
        .displayInlineBlock{
            display: inline-block;
        }

        .paddingTop{
            padding-top: 10px;
        }

        .border{
            border: 1px solid lightgrey;
        }

        .firstForm{
            width:330px;
            background-color: #ffebcc;
            border: 1px solid black;
            padding: 5px ;
        }

        .labelForm{
            display: inline-block;
            width:80px;
        }

        .fieldMargin{
            margin-left: 10px;
        }


    </style>
</head>
<body>


<form class="firstForm" action="form-out.php" method="post" >
    <div class="fieldMargin">Fill your info</div>
    <div class=" displayInlineBlock">
        <div class="someMargin">
            <label class="labelForm">Last name:</label>
            <input class="border fieldMargin" type="text" size="30" maxlength="40" name="last_name" required
                   value=<?php  if (isset($_POST['last_name'])) echo $_POST['last_name']; ?> >
        </div>
        <div class="someMargin">
            <label class="labelForm">First name:</label>
            <input class="border fieldMargin" type="text" size="30" maxlength="40" name="first_name" required
                   value=<?php  if (isset($_POST['first_name'])) echo $_POST['first_name']; ?> >
        </div>
        <div class="someMargin">
            <label class="labelForm">Year:</label>
            <input class="border fieldMargin" type="text" size="4" maxlength="4" name="year"
                   value=<?php  if (isset($_POST['year'])) echo $_POST['year']; ?> >
        </div>

        <div class="someMargin" >
            <label class="labelForm">Email:</label>
            <input class="border fieldMargin" type="text" size="30" maxlength="40"  name="email" required
                   value=<?php  if (isset($_POST['email'])) echo $_POST['email']; ?> >
        </div>
        <div class="someMargin">
            <label class="labelForm ">Phone:</label>
            <input class="border fieldMargin " type="text" size="30" maxlength="40" required name="phone"
                   value=<?php  if (isset($_POST['phone'])) echo $_POST['phone']; ?> >
        </div>

        <div class="someMargin">
            <label class="labelForm">Password:</label>
            <input class="border fieldMargin" type="password" size="20" maxlength="40" required name="password">
        </div>
        <div class="someMargin">
            <label class="labelForm">Confirm Password:</label>
            <input class="border fieldMargin" type="password" size="20" maxlength="40" required name="passwordConfirm"
            >
        </div>
        <div class="someMargin" >
            <label class="labelForm">Movie type:</label>
            <input class="border fieldMargin" type="text" size="30" maxlength="40"  name="movie" required
                   value=<?php  if (isset($_POST['movie'])) echo $_POST['movie']; ?> >
        </div>

    </div>

    <div class="someMargin paddingTop"><input type="submit"></div>


</form>




</body>
</html>