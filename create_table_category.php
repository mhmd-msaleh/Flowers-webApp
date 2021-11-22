<?php
    $connection = mysqli_connect("localhost", "root", ""); 
    if(mysqli_error($connection)){
        die(mysqli_error($connection));
    }
    if(!mysqli_select_db($connection, 'flowers_db')){
        die(mysqli_error($connection));
    }else{echo "Success database Switch";}
    $sql = "CREATE TABLE categories(
        id INT(11) PRIMARY KEY AUTO_INCREMENT, 
        category VARCHAR(80) NULL NULL
    );";

    if(!mysqli_query($connection, $sql)){
        die(mysqli_error($connection));
    }
    else{ echo "Success Table adding";}
    mysqli_close($connection)
?>