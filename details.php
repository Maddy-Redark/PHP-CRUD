<?php
    session_start();
    if(!(isset($_SESSION['email']))) {
        echo "<script>alert('Access denied!!!')</script>";
        echo "<script>location.href = 'login.php'</script>";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">

    <title>Freview - Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Freview</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Reviews <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div class="align">
                <form class="form-inline my-2 my-lg-0" action="logout.php">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Log Out</button> 
                </form>
            </div>
        </div>
    </nav>

    <h5 class="backButton">
        <a href="Home.php"><i class="fa-solid fa-angle-left"></i> Go Back</a>
    </h5>

    <h2 class="p-3">Review</h2>

    <div class="display-container">
        <div id="display-image">
        <?php
            include 'config.php';

            $viewData = $_REQUEST["viewData"];
    
            $query = " SELECT * FROM `image` WHERE `filename` LIKE '$viewData' ";
            $result = mysqli_query($conn, $query);
     
            while ($data = mysqli_fetch_assoc($result)) {
        ?>
            
                <img src="./image/<?php echo $data['filename']; ?>">

                <br>

                <h3>Review</h3>

                <p> <?php echo $data['details']; ?> </p>
     
        <?php
            }
        ?>
        </div>

        <?php

        while($data = mysqli_fetch_assoc($result)) {
        

        echo "<script>
            <a href='deleteAction.php?viewData=".$data['filename']."><button class='btn btn-danger'>Delete</button></a>
            <a href='updateAction.php?viewData=".$data['filename']."><button class='btn btn-secondary'>Update</button></a>
        </script>";

        }
        ?>


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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>