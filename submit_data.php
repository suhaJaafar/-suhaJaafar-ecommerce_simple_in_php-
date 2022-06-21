<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_submit.css">
    <link rel="stylesheet" href="css/style_content.css">

    <link rel="stylesheet" href="css/style_footer.css">

</head>
<body>


<?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        // $conn = mysqli_connect("localhost", "root", "", "myinfo");
        
        // Check connection
        // if($conn === false){
        //     die("ERROR: Could not connect. "
        //         . mysqli_connect_error());
        // }
        require_once "config.php";
        
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $website =  $_REQUEST['website'];
        $comment = $_REQUEST['comment'];
        $gender = $_REQUEST['gender'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO information  VALUES ('$name',
            '$email','$website','$comment','$gender')";


// include 'header.php'; ?>
<section class="results">
<?php 
  if ($pdo->exec($sql)) {
     if (empty($_POST["name"])) {
      $nameErr = ""; ?>
      <div class="result">No name entered</div>
    <?php } else { ?>
      <div class="result"> Welcome <?php echo $_POST["name"]; ?></div>
    <?php } ?>
  
  
    <?php if (empty($_POST["email"])) {
      $nameErr = ""; ?>
      <div class="result">No email entered</div>
  <?php
    } else { ?>
      <div class="result"> Your email address is: <?php echo $_POST["email"]; ?></div>
    <?php } ?>
  
  
    <?php if (empty($_POST["website"])) {
      $nameErr = ""; ?>
      <div class="result">No website entered</div>
  <?php
    } else { ?>
      <div class="result"> Your Website is : <?php echo $_POST["website"]; ?></div>
    <?php } ?>
  
  
    <?php if (empty($_POST["comment"])) {
      $nameErr = ""; ?>
      <div class="result">No commet entered</div>
  <?php
    } else { ?>
      <div class="result"> Your Short Message is : <?php echo $_POST["comment"]; ?></div>
    <?php } ?>
  
  
    <?php if (empty($_POST["gender"])) {
      $nameErr = ""; ?>
      <div class="result">No gender entered</div>
  <?php
    } else { ?>
      <div class="result"> Your Gender is : <?php echo $_POST["gender"]; ?></div>
    <?php } ?>
   <?php } else {
    echo $sql . "<br>" . $e->getMessage();
  }

  // Close connection
  $conn = null;
?>
<!--  -->
</section>
</body>
</html>

