<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

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
                        <li><a href="signup.html">Sign up</a></li>
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
                <h1 style="text-align: center; color: rgb(27, 32, 31);">UPLOAD YOUR FILE</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laboriosam quam maiores ducimus numquam vitae tempora quae voluptatum magni, architecto amet iste laudantium. Ratione nesciunt vel explicabo, modi delectus veniam.</p>
                </div>

                

            </div>
    
</div>  

<div class="container">
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
    </form>
</div>
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

</body>
</html>