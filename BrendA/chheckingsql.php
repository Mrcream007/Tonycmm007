<?php

    include_once "database.php";

?>

    <?php

        

        /*$id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pswd'];

        $sql = "INSERT INTO brend (id, name, email, password1) VALUES (NULL, '$name', '$email', '$pass');";
         mysqli_query($sqliconn, $sql);*/




        if (empty($_POST["name"])){
          die("Name required!");
        }

        if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
          die("Valid email is needed");
        }

        if (strlen($_POST["pswd"]) < 8) {
          die("Password must be 8 characters long");
        }

        if (! preg_match("/[a-z]/i", $_POST["pswd"])) {
          die("Password must contain at least one letter");
        }

        if (! preg_match("/[0-9]/", $_POST["pswd"])) {
          die("must contain at least one number");
        }

        $password1 = password_hash($_POST["pswd"], PASSWORD_DEFAULT);

        $sqliconn = require __DIR__ . "/database.php";

        $sql = "INSERT INTO brend (name, email, password1)
        VALUES (?, ?, ?)";

        $stmt = $sqliconn->stmt_init();

        if (! $stmt->prepare($sql)){
          die("SQL error: " . $sqliconn->error);
        }

        $stmt->bind_param("sss",
                            $_POST["name"],
                            $_POST["email"],
                            $password1);
        
        if ($stmt->execute()){
          header("Location: successful-signup.html");
          exit;
        }

        else {
          die($sqliconn->error . " " . $sqliconn->errno);
        }

    ?>

</body>
</html>