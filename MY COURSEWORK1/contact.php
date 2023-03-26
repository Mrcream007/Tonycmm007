<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container mt-5">
        <h1>Contact Me!</h1>
        <form action="https://formsubmit.co/okochachuka@gmail.com" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="name" required>
            </div>

            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="Last Name" required>
            </div>

            <div class="col-md-8">
                <label for="emailInfo" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="emailInfo" name="email" required>
            </div>

            <div class="col-md-4">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phoneNumber" name="phone" placeholder="+44 7776764315">
            </div>

            <div class="col-md-12">
                <label for="comments" class="form-label">Comments, Inquiry?</label>
                <textarea class="form-control" name="comments, questions" id="comments" rows="3" required></textarea>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <br>
        <a href="homepage1.php">Homepage</a>
    </div>
</body>
</html>