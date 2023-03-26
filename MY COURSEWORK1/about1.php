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
     
     <br><br><br>
     
 </ul>
 </nav>
 

            <br>
</div>
        <div class= "background-pix">
            <div class="container">
                <br><br>
            <div class="jumbotron">
                    <h1 style="text-align: center; color: rgb(27, 32, 31);">ALL ABOUT US</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laboriosam quam maiores ducimus numquam vitae tempora quae voluptatum magni, architecto amet iste laudantium. Ratione nesciunt vel explicabo, modi delectus veniam.</p>
            </div>
    
            <div class="row">    
                    <div class="col-md-4">
                      
                        <h2 style="background-color: whitesmoke;">Friendly community</h2>
                        <div class="box1">       
                            <img src="assets/images/friends.jpg" class="img-rounded" alt="Cinque Terre" width="350" height="236"> 
                            <p style="background-color: yellowgreen;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ducimus est error. Tempora deserunt necessitatibus laborum perspiciatis dicta quaerat expedita consequuntur, incidunt voluptate reprehenderit repellat architecto aut, delectus, exercitationem rem!</p>
                        </div>
                    </div>
    
    
                    <div class="col-md-4">
                      
                    <h2 style="background-color: whitesmoke;">Professional</h2>
                        <div class="box1">       
                            <img src="assets/images/officeLady.jpg" class="img-rounded" alt="Cinque Terre" width="350" height="236"> 
                            <p style="background-color: yellowgreen;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ducimus est error. Tempora deserunt necessitatibus laborum perspiciatis dicta quaerat expedita consequuntur, incidunt voluptate reprehenderit repellat architecto aut, delectus, exercitationem rem!</p>
                        </div> 
                    </div>
    
                    <div class="col-md-4">
                      
                    <h2 style="background-color: whitesmoke;">Innovative</h2>
                        <div class="box1">       
                            <img src="assets/images/smilingBlackguy.jpg" class="img-rounded" alt="Cinque Terre" width="350" height="236"> 
                            <p style="background-color: yellowgreen;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ducimus est error. Tempora deserunt necessitatibus laborum perspiciatis dicta quaerat expedita consequuntur, incidunt voluptate reprehenderit repellat architecto aut, delectus, exercitationem rem!</p>
                        </div> 
                    </div>
                </div>
            </div>
               
        
        
                <footer>
                    <div class="row">
    
                        <div class="col-md-4">
                            <h3>About</h3>
                            <br>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum labore rerum, cumque praesentium incidunt quaerat? Nulla, eos quae non vero quibusdam officiis deleniti magni perspiciatis rerum cumque eaque neque expedita.</p>
                        </div>
    
                        <div class="col-md-4">
                            <h3>Privacy</h3>
                            <br>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis maxime minus, optio possimus deleniti assumenda praesentium repudiandae recusandae unde dignissimos, soluta inventore ipsam corporis, voluptatem animi beatae mollitia error magnam.</p>
                        </div>
    
                        <div class="col-md-4">
                            <h3>Copyrights</h3>
                            <br>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed perspiciatis totam consequuntur quasi voluptatem unde culpa illum, amet nam voluptatum doloremque cum ullam laudantium? Repudiandae voluptatem doloribus perspiciatis eaque amet.</p>
                        </div>
    
                    </div>
                </footer>
        </div>

</body>
</html>