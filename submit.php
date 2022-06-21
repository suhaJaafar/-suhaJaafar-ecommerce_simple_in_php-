<?php 
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]){
  ?>
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
  <?php 
    include "submit_data.php";
    ?>
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
    <?php
   
    exit;
}else{
  ?>
  <header class=" header_contact">
      <a class="element_contact logo_contact" href="home.php">LOGO</a>
      <nav class="nav_contact">
          <a class=" element_contact" href="home.php">Home</a>
          <a class=" element_contact" href="about.php">About Us</a>
          <a class=" element_contact" href="contact.php">Contact Us</a>
          <a href="register.php" class=" register_btn_contact element_contact">Sign In</a>
      </nav>
      <a href="acount_info.php"><img class="img_user_contact" src="img/anonymous-person.jpg" alt="" title="Hi User"></a>

  </header>
  <?php
    include "submit_data.php";
    ?>

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
    <?php
    exit;
}
?>