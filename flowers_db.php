<?php
    class Flowers_db{

        function __construct(){
            require_once('connect_db.php');      
        }
        function getFlowers(){
            $sql = "SELECT * FROM flowers;";

            
        }
        function addFlower($data){
            
        }
    }
?>