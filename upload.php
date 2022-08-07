<?php

    include 'config.php';

    if (isset($_POST['upload'])) {
 
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "./image/" . $filename;
        $i_details = $_POST["details"];
     
        
        $sql = "INSERT INTO `image` (`filename`, `details`) VALUES ('$filename', '$i_details')";
     
        
        mysqli_query($conn, $sql);
     
        
        if (move_uploaded_file($tempname, $folder)) {
            echo "<script>location.href='Home.php';</script>";
        } else {
            echo "<script>alert('Failed to upload image!')</script>";

        }
    }

?>