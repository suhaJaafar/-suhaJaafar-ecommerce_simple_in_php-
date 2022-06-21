<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style_footer.css">
  
  <link rel="stylesheet" href="css/style_contact.css">
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<section class="sec_contact">
<!-- <h2 class="title">PHP Form Validation Example</h2> -->
<p class=" par"><span class="error">* required field</span></p>
<form class="form-content" method="post" action="submit.php">  
  <p> Name: </p><input class="input" type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <p> E-mail: </p><input class="input" type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <p> Website: </p><input class="input" type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  <p> Your Message : </p><textarea class="msg input" name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <p> Gender: </p><input class="input" type="text" name="gender" value="<?php echo $gender;?>">
  <span class="error">* <?php echo $genderErr;?></span>

  <!-- <p> Gender:</p>
  <input class="radio" type="radio" name="gender" php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input class="radio" type="radio" name="gender" php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input class="radio" type="radio" name="gender" php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* php echo $genderErr;?></span> -->
  <br><br>
  <input class="submit" type="submit" name="submit" value="Submit">  
</form>
</section>

<?php

?>
</body>
</html>