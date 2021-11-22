<?php
    $connection = mysqli_connect("localhost", "root", "", "flowers_db" );
    if (!$connection){
        die("Cannot connect: ". mysqli_connect_error());
    }
?>