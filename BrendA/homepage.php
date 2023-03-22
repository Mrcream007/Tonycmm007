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
                <a class="nav-link" href="about.php">about</a>
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
                <!--<li class="nav-item">
                    <a class="nav-link" href="logout.php">Log out</a>
                </li>-->
                <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign up</a>
                </li>
            </ul>
            </nav>

        
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
</body>
</html>