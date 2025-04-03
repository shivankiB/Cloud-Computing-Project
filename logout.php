<?php
// Start session
session_start();

// Destroy session data
$_SESSION = array();
session_destroy();

// Redirect to login page after logout
header("Location: login1.php");
exit;
?>
