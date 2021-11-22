<?php
$link = mysqli_connect("localhost", "root", "", "test" );
if ($link == false){
    die("Cannot connect: ". mysqli_connect_error());
}

$sql = "INSERT INTO persons(first_name) VALUES('ALI');";
if(mysqli_query($link,$sql)){
    echo "Table is created successfully";
}else{
    echo "Error could not abe to execute $sql. ". mysqli_error($link);
}

?>