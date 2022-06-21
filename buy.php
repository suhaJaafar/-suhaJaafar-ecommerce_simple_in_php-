<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) && !$_SESSION["loggedin"]){
    header("location: register.php");
    
    exit;
}

?>

    <link rel="stylesheet" href="css/style_contact.css">
<style>
    .center {
   
    /* width: 300px; */
    /* text-align: center; */

    display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  /*  */
  min-height: 100vh;
}

.center .buy {
    cursor: pointer;
    text-align: center;
    width: 250px;
    /* height: 190px; */
    line-height: 100px;
    color: #CDB699;
    /* height: 100px; */
    
    border-radius: 10px;
    background-color: #BB6464;
}
</style>
<header class=" header_contact">
        <a class="element_contact logo_contact" href="home_login.php">LOGO</a>
        <nav class="nav_contact">
            <a class=" element_contact" href="home_login.php">Home</a>
            <a class=" element_contact" href="about.php">About Us</a>
            <a class=" element_contact" href="contact.php">Contact Us</a>
            <a href="register.php" class=" register_btn_contact element_contact">Sign Out</a>
        </nav>
        <a href="acount_info.php"><img class="img_user_contact" src="img/anonymous-person.jpg" alt="" title="Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?> "></a>

    </header>


<div class="center"><h1 class="buy">Buy now </h1></div>


<footer>
        
        <div class=" icons_contact share">
        <i class="fa-brands fa-facebook-f icon_contact"></i>
        <i class="fa-brands fa-instagram icon_contact"></i>
        <i class="fa-brands fa-whatsapp icon_contact"></i>
        </div>
        <div class="share text_contact"><?php echo "<p>Copyright &copy; " . date("Y") . " suha jaafar</p>"; ?></div>
    
</footer>
<script src="https://kit.fontawesome.com/92a9b327ab.js" crossorigin="anonymous"></script></body>
</html>