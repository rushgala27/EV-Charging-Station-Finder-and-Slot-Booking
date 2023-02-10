<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        session_start();
      if(!isset($_SESSION['username'])){
        echo "<script> window.alert('User is not logged in!');
        setTimeout(function() {window.location.href = 'HomePage.html';},1000);  </script>";
        exit;
      }
$_SESSION['station_id'] = $_SERVER['QUERY_STRING'];
    }

else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
  $_SESSION['regno'] = $_POST['regno'];
  $_SESSION['start_time'] = $_POST['start_time'];
  $_SESSION['end_time'] = $_POST['end_time'];
  $_SESSION['model'] = $_POST['model'];
$servername = "localhost";
$dbusername = "id20022737_evcharging1";
$dbpassword = ">nw4ONoC)@2^BQ1/";
$dbname = "id20022737_evcharging";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    exit;
}
else{
$station_id = (int)$_SESSION['station_id'];
$start_time = date('Y-m-d H:i:s', strtotime($_POST['start_time']));
$end_time = date('Y-m-d H:i:s', strtotime($_POST['end_time']));
$sql = "INSERT INTO `booking_details`(Username, Station_Id, Start_time,	End_time,	regno, model)	 VALUES ('$_SESSION[username]', $station_id, '$start_time', '$end_time', '$_POST[regno]', '$_POST[model]')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
  header('Location: UserBookingsHistory.html');
} else {
  echo "<script> window.alert('Booking failed');
  setTimeout(function() {window.location.href = 'Bookings.php';},1000);</script>";
   $conn->close();
        exit;
}
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
   
   $('#navbar').load("Navbar.html");
   $('#footer').load("Footer.html");

});
</script>

    <title>EV Charging Station Finder</title>
  </head>
  <body>
    <div id="navbar"></div>
    <div class="container" style="margin:auto;">
      <div class="title" style="font-size: 25px; font-weight: 500; position: relative;">Booking Details<hr></Details></div>
      <div class="content" style="margin:auto;">
        <form action="Bookings.php" method="post">
          <div class="user-details" style="display: block; justify-content: space-between; margin: 20px 0 12px 0;">
            <div class="input-box" style="margin-bottom: 15px;">
              <span class="details">Registration no</span><br>
              <input type="text" name="regno" required><br>
              <span class="details">Model</span><br>
              <input type="text" name="model" required><br>
              <span class="details">Start time</span><br>
              <input type="datetime-local" name="start_time" required><br>
              <span class="details">End time</span><br>
              <input type="datetime-local" name="end_time" required><br>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Book">
            </div>
          </form>
        </div>
    </div>
    <div id="footer" style="position:absolute;bottom:0px;width: 100%;"></div>
  </body>
</html>