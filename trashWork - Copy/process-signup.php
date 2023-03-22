<?php
    //Validating name
    if (empty($_POST["name"])) {
        die("Name is required");
    }

    //validating email
    if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        die("Valid email is required!");
    }

    //checking the length of the password verification
    if (strlen($_POST["password"]) < 8) {
        die("Password must be atleast 8 characters long");
    }

    //checking that the password verification form contains atleast 1 letter.
    if (! preg_match("/[a-z]/i", $_POST["password"])) {
        die("Password must contain at least one letter");
    }

    //checking that the password verification form contains atleast 1 number.
    if (! preg_match("/[0-9]/", $_POST["password"])) {
        die("Password must contain at least one number");
    }

    //validating the password confirmation field to make sure that both passwords match
    if($_POST["password"] !== $_POST["password_confirmation"]){
        die("Password must match");
    }

    //this adds more security to the password by making sure that the password inputed by the user cannot be copied and pasted
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    //This is what will be returned from the return statement in the database.php
    $mysqli = require __DIR__ . "/database.php";

    //inserting values into our tables
    $sql = "INSERT INTO user (name, email, password_hash)
    VALUES (?, ?, ?)";

    $stmt = $mysqli->stmt_init();

    //this code checks for any error in our sql above
    if (! $stmt->prepare($sql)){
        die("SQL error: " . $mysqli->error);
    }

    //binding the VALUES to the placeholder characters. Note the three 's' (strings) indicates the 'name', 'email', 'password_hash'
    $stmt->bind_param("sss",
                        $_POST["name"],
                        $_POST["email"],
                        $password_hash);

    if($stmt->execute()){

        /*echo "Signup successful";*/

        //this redirects the user to a page (signup-success.html) after successfully signing in
        header("Location: signup-success.html");
        exit;
    }

    else {
        die($mysqli->error . " " . $mysqli->errno);
    }

    //*print_r($_POST);
   // var_dump($password_hash);*/
?>