<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_nav.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="element logo"><a class="logo element" href="home_login.php">LOGO</a></div>
        <nav>
            <a class="element" href="home_login.php">Home</a>
            <a class="element" href="about.php">About Us</a>
            <a class="element" href="contact.php">Contact Us</a>
            <a href="logout.php" class="element register_btn">Sign Out</a>
        </nav>
        <a href="acount_info.php"><img class="img_user" src="img/anonymous-person.jpg" alt="" title="Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?> "></a>

    </header>



