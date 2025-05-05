<?php
session_start();

// Destroy the session
session_unset();
session_destroy();

// Remove the cookie (if it exists)
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, "/"); // Expire the cookie
}

header('Location: login.php'); // Redirect to login page
exit();
