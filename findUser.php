<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
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
        
        $sql = "SELECT Username FROM `users` WHERE `Full name`=\"$_GET[name]\"";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0){
            $row = $result->fetch_assoc();
            session_start();
            $_SESSION["username"] = $row["Username"];
            echo "True";
        }
        else{
            echo "False";
        }
    }
?>