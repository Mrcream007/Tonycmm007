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

    <!--START OF TEST LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
    <!--END OF TEST LINK-->

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
                                        <div style=" padding-top: 9px; margin-left:5px; border-radius: 12px; padding: 0px; height: 40px; border: 2px solid orange;">
                                        <p>Hi <?=htmlspecialchars($brend["name"]) ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                        
                        <br><br><br>
                        
                    </ul>
                    </nav>

    </div>  
    <div class= "background-pix">
        <div class="container">
            <div class="row">    
                <section style="background-color: white;" class="col-md-8">
                    <h2 style="text-align: center;">Northern Lake</h2>
                    <img src="assets/images/beautiful-panoramic-view-kucherla-mountain-lake-mountain-range-belukha-national-park-altai-republic-siberia-russia_152904-12191.jpg" alt="pic girl">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae laboriosam officiis debitis iure vitae temporibus, ipsam fuga explicabo asperiores, at autem nemo aliquid, tenetur iusto cupiditate. Voluptatem illum aut non?</p>
                    
                </section>

                <aside style="background-color: white; color:black" class="col-md-4">
                    <article>
                        <h3 style="text-align: center;">Latest Stories</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet odio commodi esse dolor. Odit officiis provident maiores rem ducimus quibusdam aspernatur itaque molestiae deserunt id enim, et minima, error rerum.</p>
                    </article>

                    <article>
                        <h3 style="text-align: center;">Destinations</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque aperiam, necessitatibus, dolores repellat dignissimos non, facilis cupiditate quasi beatae delectus minima modi fugiat. Officia, ad nulla asperiores beatae facere illo!</p>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam voluptatum eaque, cumque fuga cupiditate vero atque a impedit perspiciatis non sed aspernatur aliquam ea dignissimos, consequatur assumenda error, accusantium voluptate!</p>
                    </article>
                </aside>
            </div>
            </div>
        </div>
            <footer>
                        <div class="global">
                <div class="curve"></div>
                <div class="container">
                    <div class="row">
                    <div class="col-md-6 col-md-3">
                        <h6>The Logo</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                    <div class="col-sm-6 col-md-2">
                        <h6>Services</h6>
                        <ul>
                            <li><a href="#">Email Marketing</a> </li>
                            <li><a href="#">Campaigns</a> </li>
                            <li><a href="#">Branding</a> </li>
                            <li><a href="#">Offline</a> </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-2">
                        <h6>About</h6>
                        <ul>
                            <li><a href="about1.php">Our Story</a> </li>
                            <li><a href="about1.php">Benefits</a> </li>
                            <li><a href="about1.php">Team</a> </li>
                            <li><a href="about1.php">Careers</a> </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-2">
                        <h6>Legal</h6>
                        <ul>
                            <li><a href="#">Terms & Conditions</a> </li>
                            <li><a href="#">Privacy Policy</a> </li>
                            <li><a href="#">Terms of use</a> </li>
                        </ul>
                    </div>

                    <div class="social">
                        <h6>Follow us</h6>
                        <a href="#"><i class="fa fa-facebook"></i> </a>
                        <a href="#"><i class="fa fa-twitter"></i> </a>
                        <a href="#"><i class="fa fa-snapchat-ghost"></i> </a>
                        <a href="#"><i class="fa fa-instagram"></i> </a>
                        <a href="#"><i class="fa fa-google-plus"></i> </a>
                    </div>

                    </div>
                    <p class="copyright"> &copy; Copyright All rights reserved. </p>
                </div>
                </div>

            </footer>
</body>
</html>