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
            <nav class="navbar navbar-expand-sm bg-light justify-content-center">

                        <h5 class="logo" style="text-indent: -9999999px; background: url('girl.jpg'); width: 120px; height: 50px; margin-right: 200px;">logo</h5>
                            

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
                                <div style=" padding-top: 9px; margin-left:5px">
                                <p>Hi <?=htmlspecialchars($brend["name"]) ?></p>
                                    <?php endif; ?>
                                </div>
                            </li>
                
                
            </ul>
            
            </nav>
            
        
</div>
        <br><br><br><br>


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
    
    <a href="homepage1.php">Home</a>
</body>
</html>