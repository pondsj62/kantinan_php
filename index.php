<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">   
</head>
<body>
    <?php include 'header.php'; ?>
    
    <h2>Welcome to Website</h2>
    <?php echo"$_SESSION[EMAIL]"; ?>

    
    <p class="content">This page is designed to display IoT data collected from various sensors.</p>
    <div id="bbb">
        โดย กันตินันท์ ภัคพรหมินทร์
    </div>

<div class="button-group">
    <button class="button" onclick="location.href='Form_users.php'">สมัครสมาชิก</button>
    <button class="success" onclick="location.href='Form_iot.php'">เพิ่มข้อมูล IoT</button>
</div>
    
</body>
</html>