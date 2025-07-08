<?php
    session_start();
    session_destroy(); // Destroy the session
    header("Location: index.php"); // Redirect to the home page
    exit(); // Ensure no further code is executed
?>