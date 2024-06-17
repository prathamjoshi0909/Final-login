<?php
session_start();
$_SESSION['logout_message'] = "Logout successful";
session_destroy();
header("Location: /Users/pratham/Documents/Pratham/Final_Year/8 th sem/Final login/templates/home_login.html");
exit();
?>
