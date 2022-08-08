<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">

    <title>Login</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            
        </div>
      </nav>

      <div class="container my-5 mx-10">
        <h1>Login</h1>
      <form class="mt-3" action="login_action.php" method="post">
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">E-mail: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" name="email">
            </div>
          </div>

          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password: </label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password">
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-lg my-2">submit</button>

          <div class="form-group row editLink">
            <p class="mx-2">Got no account?</p>
            <a href="registration.php">Register here</a>
          </div>
      </form>
    </div>


    <footer>
        <div class="siteFooter">
            <div class="footRow">
                <a href="https://www.facebook.com/proloy.rakshit.1"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://twitter.com/RakshitProloy"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/proloy.rakshit.1"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/abir-rakshit-b5822518b/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>

            <div class="footRow">
                <h6>Freview Copyright <i class="bi bi-c-circle"></i> 2022 Freview - All rights reserved</h6>
            </div>
        </div>
    </footer>

      <hr>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>