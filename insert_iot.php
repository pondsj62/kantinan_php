<?php
    include 'connect.php';

    $zone = $_POST['zone'];
    $temp = $_POST['temp'];     
    $hum = $_POST['hum'];
    $users = $_POST['users'];

    $sql = "INSERT INTO tbl_iot (zone, temp, hum, users) VALUES ('$zone', '$temp', '$hum', '$users')";  

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>