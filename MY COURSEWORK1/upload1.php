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

        <!--<link rel="stylesheet" href="/assets/css/unsemantic-grid-responsive-tablet.css">-->

        </head>

        <body>
            
        <div class="fixed-top">
            
        
<?php

        if(isset($brend)):
?>

        


        <!--<p>You are logged in.</p>
        <h3>welcome</h3>-->


        

<?php

else:
?>

        <p><a href="login.php">Log in</a> or <a href="signup.html">Sign up</a></p>

<?php endif; ?>
            
            <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <div>
                
                <!--<h1><img src="assets/images/flower.jfif" alt="flower image" id="flower" style="height: 58px; width: 60px;"><a href="home1.php">Site Name</a></h1>-->
            </div>
            <ul class="navbar-nav">
            
                <li class="nav-item">
                <a class="nav-link" href="homepage1.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about1.php">About us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="stories.php">Stories</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact1.php">Contact</a>

                

                </li>
                <li class="nav-item">
                <a class="nav-link" href="galleries.php">Galleries</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" href="logoutScript.php">Logout</a>
                </li>
                <br>
                
                <p>Hi <?=htmlspecialchars($brend["name"]) ?></p>
                <br>
                
                <br>
                <!--<form class="d-flex" role="search">-->
        <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>-->
      </form>
                
            </ul>
            </nav>
        </div>
        <br><br><br><br><br>

        <div style="background-image: url('../brendNew/assets/images/snowy-mountain-landscape.jpg');">

        <div class="container">
        <div class="wrapper">
            <form action="uploadscript.php" method="post" enctype="multipart/form-data" style="background-color:brown; max-width:500px; margin-left: 300px">

                <h2 style="text-align: center; padding-top: 10px;">CREATE YOUR STORY</h2>

                <div style="margin-left: 90px;">
                <label for="title">Title</label>
                <br>
                <input type="text" id="title" name="title" placeholder="title">
                <br><br>
                </div>

                <div style="margin-left: 90px;">
                <label for="sub-title">Sub-Title</label>
                <br>
                <input type="text" id="sub-title" name="sub-title" placeholder="sub-title">
                <br><br>
                </div>

                <label for="story">Story</label>
                <br>
                <textarea name="story" id="story" cols="30" rows="10" placeholder="Write your story!" style="width: 500px"></textarea>
                <br><br>

                <input type="file" name="file"><br>
                <button type="submit" name="submit">UPLOAD</button>

            </form>
        </div>
        </div>
        </div>
        </body>
</html>