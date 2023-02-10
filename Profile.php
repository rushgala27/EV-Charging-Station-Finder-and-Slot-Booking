<?php
      session_start();
      if(!isset($_SESSION['username'])){
        echo "<script> window.alert('User is not logged in!');
        setTimeout(function() {window.location.href = 'HomePage.html';},1000);</script>";
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
      $sql = "SELECT * FROM users WHERE Username='".$_SESSION['username']."'";
      $result = $conn->query($sql);
      if ($result && $result->num_rows > 0){
        $row = $result->fetch_assoc();
        $username = $row['Username'];
        $full_name = $row['Full Name'];
        $email = $row['Email'];
        $gender = $row['Gender'];
        $mobile_no = $row['Mobile no'];
        $age = $row['Age'];
        $address = $row['Address'];
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
    
    <div style="color: green;margin-left: 70px;margin-right: 70px;margin-top: 40px;margin-bottom: 20px;">
    <div style="display: flex; margin-bottom: 20px;justify-content: space-between;">
      <span>
    <label style="font-size: 30px;width:180px;font-weight: 500;">Username: </label>
    <input type="text" id="username" style="border: 2px solid black;color:black;font-size: 28px;padding-left: 10px;width:fit-content;" disabled value="<?php echo $username ?>">
      </span>
      <span>
      <label style="font-size: 30px;width:180px;font-weight: 500;">Full Name: </label>
      <input type="text" id="full_name" style="border: 2px solid black;color:black;font-size: 28px;padding-left: 10px;" disabled value="<?php echo $full_name ?>">
    </span>
      </div>

      <div style="display: flex; margin-bottom: 20px;justify-content: space-between;">
        <span>
      <label style="font-size: 30px;width:250px;font-weight: 500;">Mobile Number: </label>
      <input type="text" id="mobile_no" style="border: 2px solid black;color:black;font-size: 28px;padding-left: 10px;width:200px;" disabled value="<?php echo $mobile_no ?>">
        </span>
        <span>
        <label style="font-size: 30px;width:110px;font-weight: 500;">Email: </label>
        <input type="text" id="email" style="border: 2px solid black;color:black;font-size: 28px;padding-left: 10px;width: 400px;" disabled value="<?php echo $email ?>">
      </span>
        </div>

  <div style="display: flex;margin-bottom: 20px;">
    <label style="font-size: 30px;width:150px;font-weight: 500;">Address: </label>
    <input type="text" id="address" style="border: 2px solid black;color:black;font-size: 28px;width: 93%;padding-left: 10px;" disabled value="<?php echo $address ?>">
  </div>
  <div style="display: flex;justify-content: space-between;">
  <span>
    <label style="font-size: 30px;width:80px;font-weight: 500;">Age: </label>
    <input type="text" id="age" style="border: 2px solid black;color:black;font-size: 28px;width: 80px;padding-left: 10px;" disabled value="<?php echo $age ?>">
  </span>
  <span>
    <label style="font-size: 30px;width: 130px;font-weight: 500;">Gender: </label>
    <input type="text" id="gender" style="border: 2px solid black;color:black;font-size: 28px;width: 150px;padding-left: 10px;" disabled value="<?php echo $gender ?>">
  </span>
  </div>
  </div>

  </body>
</html>