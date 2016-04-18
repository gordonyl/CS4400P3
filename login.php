<?php
    $servername = "www.academic-mysql.cc.gatech.edu";
    $username = "cs4400_Team_38";
    $password = "Npsus4Hp";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>