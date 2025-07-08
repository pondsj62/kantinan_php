<?php
    session_start();
    include 'connect.php';

    $username = $_POST['USERNAME'];
    $password = $_POST['PASSWORD'];

    $sql = "SELECT * FROM tbl_user WHERE USERNAME='$username' AND PASSWORD='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // User exists, set session variables
        $row = $result->fetch_assoc();
        $_SESSION['USERNAME'] = $row['USERNAME'];
        $_SESSION['NAME'] = $row['NAME'];
        $_SESSION['EMAIL'] = $row['EMAIL'];
        
        // Redirect to the main page or dashboard
        header("Location: index.php");
    } else {
        // User does not exist, redirect back to login with error
        header("Location: login.php?error=Invalid username or password");
    }