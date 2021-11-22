<?php
    $connection = mysqli_connect("localhost", "root", ""); 
    if(mysqli_error($connection)){
        die(mysqli_error($connection));
    }
    if(!mysqli_select_db($connection, 'flowers_db')){
        die(mysqli_error($connection));
    }else{echo "Success database Switch";}
    $sql = "CREATE TABLE flowers(
        productID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        name VARCHAR(80) NOT NULL,
        instructions VARCHAR(1000) NOT NULL, 
        price DECIMAL(10,4) UNSIGNED, 
        photo VARCHAR(100) NOT NULL, 
        categoryID INT(11)

    );";

    if(!mysqli_query($connection, $sql)){
        die(mysqli_error($connection));
    } else{echo "Success Table creattion";}
    $sql = "ALTER TABLE flowers ADD FOREIGN KEY (categoryID) REFERENCES categories(id);";
    if(!mysqli_query($connection, $sql)){
        die(mysqli_error($connection));
    } else{ echo "Success linkage";}
    mysqli_close($connection)
?>