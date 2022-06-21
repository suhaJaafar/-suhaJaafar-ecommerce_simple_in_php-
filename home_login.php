<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: register.php");
    exit;
}
?>
    <link rel="stylesheet" href="css/style_footer.css">
    <body class="body_home_login">


 <?php 
include "header_login.php";
include "about_data.php";
include "cards.php";
include "footer.php"; ?>

    </body>
