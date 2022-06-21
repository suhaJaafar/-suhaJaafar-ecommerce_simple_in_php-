<?php 
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]){
  header("location:home_login.php");
    
   
    exit;
}else{
  header("location: home.php");

    exit;
}
?>