<?php
    
    session_start();

    if(isset($_SESSION['email'])) {
        session_unset();
        session_destroy();
        echo "<script>location.href='login.php'</script>";
    }
    else {
        echo "<script>alert('Access denied!!!')</script>";
        echo "<script>location.href='login.php'</script>";
    }