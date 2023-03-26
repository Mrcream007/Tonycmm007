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
    <title>Contact Us Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>

</head>
<body>

<div class="fixed-top">
        <div class="p-5 bg-primary text-white text-center">
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

    <br><br><br><br><br><br><br> 
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