<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
$servername = "localhost";
$dbusername = "id20022737_evcharging1";
        $dbpassword = ">nw4ONoC)@2^BQ1/";
        $dbname = "id20022737_evcharging";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO `users` VALUES ('$_POST[full_name]', 
'$_POST[username]', '$_POST[email]', '$_POST[password]', '$_POST[gender]', $_POST[phone], $_POST[age], '$_POST[address]')";

if ($conn->query($sql) == TRUE) {
  header('Location: login.php');
} else {
  echo "<script> window.alert('Registration failed');
  setTimeout(function() {window.location.href = 'index.php';},1000);</script>";
        exit;
}
$conn->close();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title>
   </head>
<body>
  <div class="container" style="margin:auto;">
    <div class="title">Registration</div>
    <div class="content">
      <form action="index.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="full_name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" name="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter your address" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" name="age" placeholder="Enter your age" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="Male">
          <input type="radio" name="gender" id="dot-2" value="Female">
          <input type="radio" name="gender" id="dot-3" value="Prefer not to say">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
      <a style="color: black" href="login.php">Already registered? Log in</a> 
    </div>
  </div>
</body>
</html>
