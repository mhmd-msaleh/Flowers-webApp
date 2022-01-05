<?php 
class Flower{
    
    public function __counstruct(){}

    public function getFlowers($connection){
        // $flowers = array(); 
        $sql = "SELECT * FROM flowers;";
        $result = mysqli_query($connection, $sql);
        // $flowers = mysqli_fetch_array($result);
        return $result; 
    }

    public function getFlower($id, $connection){
        $sql = "SELECT * FROM flowers WHERE productID='$id';";
        $result = mysqli_query($connection, $sql);
        return mysqli_fetch_array($result);
    }
}


?>