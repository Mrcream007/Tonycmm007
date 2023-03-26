<?php

session_start();

if (isset($_SESSION['brend_id'])) {
    $sqliconn = require __DIR__ . "/database.php";

    $sql = "SELECT * from brend
            where id = {$_SESSION["brend_id"]}";

    $result = $sqliconn->query($sql);

    $brend = $result->fetch_assoc();
}


//////////////////////////////////////////////

    $msg = "";
    //if upload button is pressed
    if (isset($_POST["upload"])) {
        $target = "img/".basename($_FILES["image"]["name"]);

        //connect to database
        $sqliconn = require __DIR__ . "/database.php";

        //get all submitted data from the form
        $image = $_FILES["image"]["name"];
        $text = $_POST["text"];

        $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text' )";

        //stores the submitted data into the database table
        mysqli_query($sqliconn, $sql);

        //now we move the uploaded image into the folder: image
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image upload successful!";
        }
        else{
            $msg = "Error in uploading image";
        }
    }

    
    ///////////////////[Test delete posts]
 
    /////////////////////////[End of test delete]

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
        <br><br><br><br><br>


    <div id="content">

    <?php
    
    $sqliconn = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM images";
    $result = mysqli_query($sqliconn, $sql);
    while ($row = mysqli_fetch_array($result)){
        echo "<div id='img_div'>";
            echo "<img src='img/".$row['image']."' >";
            echo "<p>".$row['text']."</p>";
            echo "</div>";
    }
    ?>

    
    <?php
        if (isset($brend)){
            echo ' <form action="" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="">
            <div>

            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image">
            </div>
            <div>
                <textarea name="text" id="" cols="40" rows="4" placeholder="write a story"></textarea>
            </div>
            <div>
                <button type="submit" name="upload" value="upload image">UPLOAD</button>
            </div>
        </form>';
       
        //delete button
        echo '<form action="" method="post">
        <div>
                <button type="submit" name="delete" value="upload image">DELETE</button>
            </div>
        </div>
    </div>';
        }
    ?>
    
    <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2375.3022063693224!2d-2.291340125480204!3d53.4630589386481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bae72e7e47f69%3A0x6c930e96df4455fe!2sOld%20Trafford!5e0!3m2!1sen!2suk!4v1679856079709!5m2!1sen!2suk" width="1100" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</body>
</html>