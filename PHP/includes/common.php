<?php
    $con = mysqli_connect("localhost", "root", "", "ecommerce","4306")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
