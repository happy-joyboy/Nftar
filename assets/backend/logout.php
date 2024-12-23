<?php
// Start the session
session_start();

// add timeout logic

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();
    session_destroy();
    header("Location: ../sites/login.php?session_expired=true"); // redirect to login page
    exit(); 
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: ../labs/login.php");
exit();
?>