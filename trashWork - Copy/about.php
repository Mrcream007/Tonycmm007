<?php
//this page shows if the user is logged in or not
    // [1]this either starts a new session or resumes an existing one
    session_start();

    ///[Last code 2 after creation of logout.php] We want to display the user's name once login is successful
    if (isset($_SESSION["user_id"])) {
        ///we retrieve the user record from the database
        $mysqli = require __DIR__ . "/database.php";
        ///we create the sql code to locate the record
        $sql = "SELECT * FROM user
                WHERE id = {$_SESSION["user_id"]}";

        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();
    }

    // [2]once session is start we store our variables to print out a message
    /*print_r($_SESSION);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="assets/css/style.css">


    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">-->

</head>
<body>
    <h1>Home</h1>

    <?php

        //checking to see if the user_id is set in the session 
        /*if (isset($_SESSION["user_id"])):*/

        ///[Last code 3]
        if(isset($user)):
    ?>
    <!--[Last code 4]prints out a message with the user's name-->
    <p>Hi <?=htmlspecialchars($user["name"]) ?></p>

    <!--and to output a message if it is set-->
    <p>You are logged in.</p>
    <h3>welcome</h3>

<!--[Last code 1 after creation of logout.php]-->
<p><a href="logout.php"></a></p>
<!--end of Last code 1-->
<?php

else:
?>

    <p><a href="login.php">Log in</a> or <a href="signup.html">Sign up</a></p>

<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>about page</h1>
</body>
</html>