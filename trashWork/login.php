<?php

    ///[Last code 1] shows a message telling the user that the login they put was invalid
    $is_invalid = false;

    //this code executes the form below
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        //checking that the email and password entered into the form matches atleast one of the database
        $mysqli = require __DIR__ . "/database.php";

        $sql = sprintf("SELECT * FROM user 
                        WHERE email = '%s'",
                        $mysqli->real_escape_string($_POST["email"]));

        //this returns a result object
        $result = $mysqli->query($sql);

        //this gets the data from the above result object
        $user = $result->fetch_assoc();


        //to check that the user variable contains data that is not null
        if ($user) {

            //to verify that the password matches the plain text password
           if (password_verify($_POST["password"], $user["password_hash"])) {

                /*die("Login successful");*/
                
                ///[Last code 4] linking to userlogin.php
                session_start();

                ///[Last code 5]
                session_regenerate_id();

                $_SESSION["user_id"] = $user["id"];

                header("Location: userlogin.php");
                exit;
           }


        }

        ///[Last code 2] if we've reached this point in the script, means that the form has been submitted and either the email or password is invalid
        $is_invalid = true;

        /*var_dump($user);
        exit;*/
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

</head>
<body>
    <h1>Login</h1>

    <!--[Last code 3] if variable is true that password or email was invalid, print the message below-->
    <?php 
        if ($is_invalid):
    ?>
        <em>Login Invalid</em>

    <?php
        endif;
    ?>
    <!--[end of last code 3]-->

    <form method="post">
        <label for="email">email</label>
        <input type="email" id="email", name="email">
            
            

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button>Log in</button>
    </form>
</body>
</html>