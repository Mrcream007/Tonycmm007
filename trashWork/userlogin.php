
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

<!---->
<div class="background-image">
            
            <nav class="navbar navbar-default">

                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="userlogin.php"><h2>Paradisio</h2></a>
                    </div>
                    <br>
                    
                    <ul class="nav navbar-nav">
                        <li><a href="userlogin.php">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Blogs</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="uploadfile.php">Uploads</a></li>
                    </ul>
                </div>

                <div class="butn">
                    <label for="">Search</label>
                    <input type="search" name="search" id="search">
                    <button type="button">Search</button>
                </div>

            </nav>

            <div class="container">
                <div class="jumbotron">
                <h1 style="text-align: center; color: rgb(27, 32, 31);">WELCOME TO MY SITE</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laboriosam quam maiores ducimus numquam vitae tempora quae voluptatum magni, architecto amet iste laudantium. Ratione nesciunt vel explicabo, modi delectus veniam.</p>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        
                        <div>
                            <h3>New York</h3>
                            <img src="assets/images/shiny-night-city.jpg" class="img-circle" alt="Cinque Terre" width="200" height="150">

                        </div>
                    </div>

                    <div class="col-md-4">
                        
                        <div>
                            <h3>New York</h3>
                            <img src="assets/images/girl.jpg" class="img-circle" alt="Cinque Terre" width="200" height="150">

                        </div>
                    </div>

                    <div class="col-md-4">
                        
                        <div>
                            <h3>New York</h3>
                            <img src="assets/images/beautiful-scenery-road-forest-with-lot-colorful-autumn-trees_181624-30942.jpg" class="img-circle" alt="Cinque Terre" width="200" height="150">

                        </div>
                    </div>
                </div>


            </div>
            <br>
            <br>

            <!--footer-->
            <footer>

                <div class="row">
                    <div class="col-md-4">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quisquam necessitatibus fugit tempora quo minima? Voluptas labore optio, quod, nemo saepe, atque libero obcaecati laboriosam vero minima in quia perferendis.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quisquam necessitatibus fugit tempora quo minima? Voluptas labore optio, quod, nemo saepe, atque libero obcaecati laboriosam vero minima in quia perferendis.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quisquam necessitatibus fugit tempora quo minima? Voluptas labore optio, quod, nemo saepe, atque libero obcaecati laboriosam vero minima in quia perferendis.
                        </p>
                    </div>
                    

                </div>
            </footer>
    
</div>  

</body>  
</html>

