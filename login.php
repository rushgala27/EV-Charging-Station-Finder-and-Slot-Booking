<?php
// define variables and set to empty values
$username = $password = $usernameerror = $passworderror = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameerror = "Name is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameerror = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["password"])) {
    $passworderror = "Email is required";
    exit;
  } else {
    $password = test_input($_POST["password"]);
  }

  if($_POST["username"] == "admin" && $_POST["password"] == "password@123"){
    session_start();
    $_SESSION["username"] = $_POST["username"];
    header('Location: Admin.html');
    exit;
  }
  
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
  $sql = "SELECT Password FROM `users` WHERE Username=\"$username\"";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                if ($row["Password"] == $password){
                    session_start();
                    $_SESSION["username"] = $_POST["username"];
                    header('Location: HomePage.html');
                    exit;
                }
                else{
                    $passworderror = "Wrong password!";
                }
            }
        }
        else{
          $usernameerror = "Invalid username!";
        }
  $conn->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<title>EV Charging Station Finder</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script>

$(document).ready(function() {
   $('#navbar').load("Navbar.html");
   $('#footer').load("Footer.html");

});
</script>
</head>
<body>  
<div id="navbar"></div>
<div class="container style="margin:auto;">
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $usernameerror;?></span>
  <br><br>
  Password: <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passworderror;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>
<div id="footer" style="position:absolute;bottom:0px;width: 100%;"></div>
</body>
</html>