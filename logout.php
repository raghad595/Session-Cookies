<?php
session_start();

// Destroy the session and unset session variables
session_unset();
session_destroy();

// Delete the cookie by setting its expiration time to a past value
if (isset($_COOKIE['username'])) {
    setcookie('username', $_COOKIE['username'], time() - 3600, "/");
}

// Redirect to the login page
header("Location: login.php");
exit();
?>
