<?php session_start(); 
if(!isset($_SESSION["loggedin"]) && !$_SESSION["loggedin"]){
    header("location: register.php");
    exit;
}
?>

    <link rel="stylesheet" href="css/style_submit.css">
    <link rel="stylesheet" href="css/style_contact.css">
    <link rel="stylesheet" href="css/style_footer.css">
    <link rel="stylesheet" href="css/style_acount_info.css">


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
<section class="sec_acount">
<h1 class="title_name">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
<h3 class="price">
    The Price is  : 99$
</h3> 
<a href="cart.php" class="add_to_cart_btn">Add To Cart</a>
<p class="manage_acount">
        <a href="reset_password.php" class="reset_pass">Reset Your Password</a>
        <a href="logout.php" class="sign_out">Sign Out of Your Account</a>
</p>
</section>
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