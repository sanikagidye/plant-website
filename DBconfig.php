<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db = "greenleaf";
    $port=3307;

    $con = mysqli_connect($host,$username,$pass,$db,$port);
    if($con){

    }
    else{
        die("Database did not connect due to error".mysqli_connect_error());
    }
?>