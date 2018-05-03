<?php

if(!function_exists("protect")){
    
    function protect(){
        
        if(!isset($_SESSION["login"])){
        header("Location: ./Home.php");
        }
    }
    
}