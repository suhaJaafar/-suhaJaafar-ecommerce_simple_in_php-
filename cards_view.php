<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="css/style_cards_view.css">
  <link rel="stylesheet" href="css/style_contact.css">

</head>
<body>
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
    <div class="up-wapper">
    <div class="wapper">
        <div class="infos">
            <h2>T-shirt summer</h2>
            <div class="made_in">Made In : Turkey</div>
            <div class="div_price">Price is : <span class="price">99$</span></div>

            <div>
            <a class="a_card" href="acount_info.php">add to cart</a>
            <a class="a_card" href="buy.php">buy now</a>
            </div>
        
        </div>
        <div><img class="img" src="img/t_shirt_1.jpg" alt=""></div>

    </div>
    </div>
    <footer>
        
        <div class=" icons_contact share">
        <i class="fa-brands fa-facebook-f icon_contact"></i>
        <i class="fa-brands fa-instagram icon_contact"></i>
        <i class="fa-brands fa-whatsapp icon_contact"></i>
        </div>
        <div class="share text_contact"><?php echo "<p>Copyright &copy; " . date("Y") . " suha jaafar</p>"; ?></div>
    
</footer>
<script src="https://kit.fontawesome.com/92a9b327ab.js" crossorigin="anonymous"></script></body>

</body>
</html>