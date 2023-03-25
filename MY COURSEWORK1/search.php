<?php 
    include "database.php";
?>

<!--///////////////////////////////////////////////-->

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

  <link rel="stylesheet" href="assets/css/search1.css">

  <link rel="stylesheet" href="/assets/css/unsemantic-grid-responsive-tablet.css">

</head>
<body>
<div class="fixed-top">
<?php

        if(isset($brend)):
?>
        
        

<?php

else:
?>
        
        

<?php endif; ?>



        
            <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            
            <div>
                <select name="story" id="story">
                    <option value="car">cars</option>
                    <option value="city">city</option>
                    <option value="tourist">tourist</option>
                </select>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="homepage1.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about1.php">about</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="poststory.php">Post story</a>
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
                <a class="nav-link" href="logout.php">Logout</a>
                </li>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="searchstories.php">View Stories</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="logout.php">Log out</a>
                </li>-->
                <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign up</a>
                </li>
                <li>
                <?php

                    if(isset($brend)):
                    ?>
                    <div style=" padding-top: 9px;">
                    <p>Hi <?=htmlspecialchars($brend["name"]) ?></p>
                        <?php endif; ?>
                    </div>
                </li>
                
                <br><br><br>
                
            </ul>
            </nav>
            
        </div>
<!--///////////////////////////////////////////////-->

<h1>Search page</h1>

<div class ="article-container">




<?php
    if (isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($sqliconn, $_POST['search']);
        $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%search%' OR a_date LIKE '%$search%'";
        $result = mysqli_query($sqliconn, $sql);
        $queryResult = mysqli_num_rows($result);

        //print out message of number of search results
        echo "There are ".$queryResult." results!";

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class= 'article-box'>
                        <h3>".$row['a_title']."</h3>
                        <p>".$row['a_text']."</p>
                        
                        <p>".$row['a_date']."</p>
                        <p>".$row['a_author']."</p>
                    </div></a>";
            }
        } else {
            echo "There are no matching results in your search!";
        }
    }
?>
</div>