<?php

    include 'config.php';

    $l_email = $_POST['email'];
    $l_password = $_POST['password'];

    $_email_pattern = "/(cse|eee)_\d{10}@lus.ac.bd/";
    $_password_pattern = "/[a-zA-Z0-9 ]{8,40}/";


    if(!preg_match($_email_pattern, $l_email)) {
        echo "<script>alert('Invalid email!!!')</script>";
        echo "<script>location.href='login.php';</script>";
    }
    else if((!preg_match($_password_pattern, $l_password))) {
        echo "<script>alert('Invalid password!!!')</script>";
        echo "<script>location.href='login.php';</script>";
    }
    else {
        $search_query = "SELECT * FROM `reg_data` WHERE `email` LIKE '$l_email' AND `password` LIKE '$l_password'";

        $result = mysqli_query($conn, $search_query);

        if(mysqli_num_rows($result)) {
            session_start();
            $_SESSION['email'] = $l_email;
            echo "<script>location.href='Home.php';</script>";
        }
        else {
            echo "<script>alert('Incorrect login details!!!')</script>";
            echo "<script>location.href='login.php';</script>";
        }
    }

    ?>