<?php
    $servername = "localhost";
    $username = "root";   //gau
    $password = "";         //gau123gau
    $dbname = "gaudb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
//    $db1 = mysqli_select_db($conn,  $dbname);

    // Check connection
//    var_dump($conn);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
 ?>
