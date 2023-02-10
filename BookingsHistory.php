<?php
      session_start();
      if(!isset($_SESSION['username'])){
        echo "<script> window.alert('User is not logged in!');
        setTimeout(function() {window.location.href = 'HomePage.html';},3000);  </script>";
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

        
    ?>  

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>EV Charging Station Finder</title>
  </head>
  <body>
    
    <div style="display: flex;">
        <div style="width:50%;height:10vh;border:2px solid black;margin:10px;padding:15px;text-align: center;font-size: 30px;font-weight: 600;">Upcoming Bookings</div>
        <div style="width:50%;height:10vh;border:2px solid black;margin:10px;padding:15px;text-align: center;font-size: 30px;font-weight: 600;">Previous Bookings</div>
    </div>
    <div style="display: flex;">
        <div style="width:50%;height:65vh;border:2px solid black;margin:10px;overflow-y: auto;overflow-x: hidden;">
          <?php
            $sql = "SELECT `name`, `address`, Start_time, End_time FROM booking_details JOIN charging_station ON booking_details.Station_Id = charging_station.Station_Id WHERE Username='$_SESSION[username]' AND `Start_time` >= NOW()";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0){
              while($row = $result->fetch_assoc()) {
                $booking = "<div style=\"height:100px;align-self: center;border:2px solid black;text-align: left;display: flex;overflow-y: auto;margin: 15px;background-color: rgb(137, 216, 137);border-radius: 10px;\">
            <img src=\"./images/electric_station_icon.png\" alt=\"icon\" style=\"height:80%;margin:6px;margin-left: 10px;border-radius: 100px;\">
            <div style=\"flex-grow: 8;height: 100%;font-size: 15px;line-height: 1.18;padding-top: 3px;font-weight: 400;position: relative;\">
            <span style=\"font-size: 17px;font-weight: 500;\">Station name:". $row["name"]."</span><br>
            Address:" .$row["address"]."<br>
            &emsp;&emsp; Time Slot: ".$row["Start_time"]." to ".$row["End_time"]."<br>
            Amount to be Paid: Rs 500 &emsp;&emsp;
            </div>
          </div>";
                echo $booking;
              }
            }
          ?>
        </div>
        <div style="width:50%;height:65vh;border:2px solid black;margin:10px;overflow-y: auto;overflow-x: hidden;">
          <?php
            $sql = "SELECT `name`, `address`, Start_time, End_time FROM booking_details JOIN charging_station ON booking_details.Station_Id = charging_station.Station_Id WHERE Username='$_SESSION[username]' AND `Start_time` < NOW()";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0){
              while($row = $result->fetch_assoc()) {
                $booking = "<div style=\"height:100px;align-self: center;border:2px solid black;text-align: left;display: flex;overflow-y: auto;margin: 15px;background-color: rgb(248, 134, 114);border-radius: 10px;\">
            <img src=\"./images/electric_station_icon.png\" alt=\"icon\" style=\"height:80%;margin:6px;margin-left: 10px;border-radius: 100px;\">
            <div style=\"flex-grow: 8;height: 100%;font-size: 15px;line-height: 1.18;padding-top: 3px;font-weight: 400;position: relative;\">
            <span style=\"font-size: 17px;font-weight: 500;\">Station name:". $row["name"]."</span><br>
            Address:" .$row["address"]."<br>
            Time Slot: ".$row["Start_time"]." to ".$row["End_time"]."<br>
            Amount to be Paid: Rs 500 &emsp;&emsp;
            </div>
          </div>";
                echo $booking;
              }
            }
          ?>
        </div>
    </div>
  </body>
</html>

<!-- <button style="font-size:12px;font-weight:500;position:absolute;right:3%;bottom: 5%;background-color: green;">View More</button> -->