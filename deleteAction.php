<?php
include 'config.php';

$viewData = $_REQUEST["viewData"];

$query = " DELETE FROM `image` WHERE `filename` = '$viewData' ";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)) {
    echo "<script>location.href='Home.php';</script>";
}
else {
    echo "<script>alert('Deletion not succesful!!!')</script>";
    echo "<script>location.href='details.php';</script>";
}