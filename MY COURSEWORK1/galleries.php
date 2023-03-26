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

<div class="fixed-top">

        
<div class="p-2 bg-primary text-white text-center">
        <h1>PARADISIO</h1>
        <p>We bring your dream destination to you!</p> 
        </div>

            <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="homepage1.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="about1.php">about</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="searchstories.php">View Stories</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="poststory.php">Post story</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="galleries.php">Galleries</a>
                    </li>
                    <li class="nav-item" style="border: 2px solid blue; border-radius: 12px; padding: 0px; height: 40px;">
                    <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item"style="border: 2px solid blue; border-radius: 12px; padding: 0px; margin-left: 2px; height: 40px;">
                    <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    </li>
                    
                    <!--<li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out</a>
                    </li>-->
                    <li class="nav-item"style="border: 2px solid blue; border-radius: 12px; padding: 0px; margin-left: 2px; height: 40px;">
                    <a class="nav-link" href="signup.php">Sign up</a>
                    </li>
                    <li>
                                <?php

                                    if(isset($brend)):
                                    ?>
                                    <div style=" padding-top: 9px; margin-left:5px; border-radius: 12px; padding: 0px; height: 40px; border: 2px solid orange;">
                                    <p style="color: white;">Hi <?=htmlspecialchars($brend["name"]) ?></p>
                                        <?php endif; ?>
                                    </div>
                                </li>
            </ul>
        </div>
        </nav>
        
        </div>
        <br><br><br><br><br><br><br><br><br>
        <section class="gallery-links">
            <div class="container">
                
                <h2 style="text-align: center;">Stories and Picture Uploads!</h2>
            <div class="row">
                <!--<div class="col-md-3">
                    <a href="#">
                        <div style="width: 100%; height: 235px; background-color: red; background-size:cover; background-position: center; background-repeat:no-repeat;"></div>
                        <h3>This is a title</h3>
                        <p>This is a paragraph</p>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <div style="width: 100%; height: 235px; background-color: red; background-size:cover; background-position: center; background-repeat:no-repeat;"></div>
                        <h3>This is a title</h3>
                        <p>This is a paragraph</p>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <div style="width: 100%; height: 235px; background-color: red; background-size:cover; background-position: center; background-repeat:no-repeat;"></div>
                        <h3>This is a title</h3>
                        <p>This is a paragraph</p>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <div style="width: 100%; height: 235px; background-color: red; background-size:cover; background-position: center; background-repeat:no-repeat;"></div>
                        <h3>This is a title</h3>
                        <p>This is a paragraph</p>
                    </a>
                </div>-->
                
                <div class="col-md-3" >
                    <!--[created after compliting the galleryscript.php] getting our data from our gallery table database-->
                    <?php


                    include_once "database.php";

                    $sql = "SELECT * FROM gallery ORDER BY orderGallery Desc";
                    $stmt = mysqli_stmt_init($sqliconn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed!";
                    }
                    else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                            <div class="col-md-12">
                            
                        <div style="width: 100%; height: 235px; background-size:cover; background-image: url(./assets/images/'.$row["imgFullNameGallery"].'); background-position: center; background-repeat:no-repeat;"></div>
                        <h3>'.$row["titleGallery"].'</h3>
                        <p>'.$row["descGallery"].'</p>
                    
                    
                    </div>
                    ';
                        }
                    }


                 //   echo '<a href="#">
                 //       <div style="width: 100%; height: 235px; background-color: red; background-size:cover; background-position: center; background-repeat:no-repeat;"></div>
                 //       <h3>This is a title</h3>
                 //       <p>This is a paragraph</p>
                 //    </a>';
                    ?>
                </div>
            </div>
            </div>

            <?php
                // the "isset" and "$_SESSION" checks that you're logged in before you can view the echo
                if (isset($brend)){
                    echo '<div class="gallery-upload" style = "margin-left: 300px; background-color: grey; padding-left:50px; padding-top: 15px; width: 300px; padding-bottom: 15px;">
                    <form action="galleryscript.php" method="post" enctype="multipart/form-data">
                    
                        <input type="text" name="filename" placeholder="file name...">
                        <br><br>
                        <input type="text" name="filetitle" placeholder="image title...">
                        <br><br>
                        <textarea type="text" name="filedesc" placeholder="image description"></textarea>
                        <br><br>
                        <input type="file" name="file">
                        <br><br>
                        <button type="submit" name="submit">upload</button>
                    </form>
                </div>';
                }
            ?>
            </div>

        </section>
        
        <br><br><br><br>
    
            <footer>
            
            <footer>
        <div class="mt-5 p-4 bg-dark text-white text-center">
                    <p>Footer</p>
                    <div class="social">
                        <h6>Follow us</h6>
                        <a href="#"><i class="fa fa-facebook"></i> </a>
                        <a href="#"><i class="fa fa-twitter"></i> </a>
                        <a href="#"><i class="fa fa-snapchat-ghost"></i> </a>
                        <a href="#"><i class="fa fa-instagram"></i> </a>
                        <a href="#"><i class="fa fa-google-plus"></i> </a>
                        <p class="copyright"> &copy; Copyright All rights reserved. </p>
                    </div>

                    </footer>  
            </footer>
</body>
</html>