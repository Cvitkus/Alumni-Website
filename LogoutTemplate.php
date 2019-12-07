<?php

// Initialize the session
session_start();
// Unset all of the session variables
session_unset();
// Destroy the session
session_destroy();
// Redirect user to login page
header("location: index.php");
exit;
?>
