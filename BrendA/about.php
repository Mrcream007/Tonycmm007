<?php

session_start();

if (isset($_SESSION['brend_id'])) {
    $sqliconn = require __DIR__ . "/database.php";

    $sql = "SELECT * from brend
            where id = {$_SESSION["brend_id"]}";

    $result = $sqliconn->query($sql);

    $brend = $result->fetch_assoc();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="stylesheet" href="/assets/css/unsemantic-grid-responsive-tablet.css">

</head>
<body>

<?php

        if(isset($brend)):
?>

        <p>Hi <?=htmlspecialchars($brend["name"]) ?></p>


        <!--<p>You are logged in.</p>
        <h3>welcome</h3>-->


        <p><a href="logout.php">logout</a></p>

<?php

else:
?>

        <p><a href="login.php">Log in</a> or <a href="signup.html">Sign up</a></p>

<?php endif; ?>



            <div>
                <h1 style="text-align: center; background-color: black;"><a href="homepage.php">Site Name</a></h1>
            </div>
            <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            

            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="homepage.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="stories.php">Stories</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="galleries.php">Galleries</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign up</a>
                </li>
            </ul>
            </nav>

</body>
</html>