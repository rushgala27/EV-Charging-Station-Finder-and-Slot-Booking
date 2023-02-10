<?php
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
        $sql = "INSERT INTO charging_station(`name`, `address`, `State`, City, Charger_type, No_of_4wheeler_ports, No_of_2wheeler_ports, Rate) values('$_POST[name]', '$_POST[address]', '$_POST[State]', '$_POST[City]', '$_POST[Charger_type]', $_POST[No_of_4wheeler_ports], $_POST[No_of_2wheeler_ports], $_POST[rate])";
        if ($conn->query($sql) === TRUE) {
          echo "<script> window.alert('New Charging Station Added Successfully!');
          setTimeout(function() {window.location.href = 'Admin.html';},1000);  </script>";
          $conn->close();
          exit;
          } else {
            echo "<script> window.alert('Error! Please Try Again');
          setTimeout(function() {window.location.href = 'Admin.html';},1000);  </script>";
          $conn->close();
          exit;
          }
        
        // }
?>