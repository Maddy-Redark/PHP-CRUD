<?php

    include 'config.php';

    $r_fname = $_POST['fname'];
    $r_email = $_POST['email'];
    $r_password = $_POST['password'];
    $r_cpassword = $_POST['cpassword'];

    $_name_pattern = "/[A-Za-z .]{3,100}/";
    $_email_pattern = "/(cse|eee)_\d{10}@lus.ac.bd/";
    $_password_pattern = "/[a-zA-Z0-9]{8,32}/";

    $duplicate_mail = mysqli_query($conn, "SELECT * FROM `reg_data` WHERE `email` = '$r_email'");


    if(mysqli_num_rows($duplicate_mail)>0) {
        echo "<script>alert('Email already taken!!!')</script>";
        echo "<script>location.href='registration.php';</script>";
    }
    else if(!preg_match($_name_pattern, $r_fname)) {
        echo "<script>alert('Invalid name!!!')</script>";
        echo "<script>location.href='registration.php';</script>";
    }
    else if(!preg_match($_email_pattern, $r_email)) {
        echo "<script>alert('Invalid email!!!')</script>";
        echo "<script>location.href='registration.php';</script>";
    }
    else if((!preg_match($_password_pattern, $r_password)) && ($r_password == $r_cpassword)) {
        echo "<script>alert('Invalid password!!!')</script>";
        echo "<script>location.href='registration.php';</script>";
    }
    else {
        $insert_query = "INSERT INTO `reg_data` (`fname`, `email`, `password`) VALUES ('$r_fname', '$r_email', '$r_password')";

        $result = mysqli_query($conn, $insert_query);

        if($result) {
            echo "<script>location.href='login.php';</script>";
        }
    }

?>