<?php
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header('Location: login.php');
    exit();
}

// If the user has a valid session or cookie, welcome them
$username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>You are successfully logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
