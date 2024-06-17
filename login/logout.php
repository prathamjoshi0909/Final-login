<?php
session_start();
$_SESSION['logout_message'] = "Logout successful";
session_destroy();
header("Location: index.php");
exit();
?>
