

<ul>
    
<li><a href="index.php">Home</a></li>
<li><a href="about.php">about</a></li>
<li><a href="contact.php">Contact</a></li>

<?php
if (isset($_SESSION['EMAIL'])) {
    echo '<li><a href="Profile.php">Profile</a></li>';
    echo '<li><a href="logout.php">Logout</a></li>';
} else {
    echo '<li><a href="Login.php">Login</a></li>';
    echo '<li><a href="Form_users.php">Register</a></li>';
}


?>

</ul>