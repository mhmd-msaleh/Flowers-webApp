<?php 
    $connection = mysqli_connect("localhost", "root", ""); 
    if(mysqli_error($connection)){
        die(mysqli_error($connection));
    }
    $sql = "CREATE DATABASE flowers_db;";
    if(!mysqli_query($connection, $sql)){
        die(mysqli_error($connection));
    } else {echo "Success creating database";}
    
?>
