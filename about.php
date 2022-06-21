<?php 
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]){
    include "header_login.php"; 
    include "about_data.php";
    include "footer.php";
   
    exit;
}else{
    include "header.php";
    include "about_data.php";
    include "footer.php";
    exit;
}



?>




