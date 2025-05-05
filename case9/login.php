<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: welcome.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hardcoded username and password for simplicity
    $valid_username = "admin";
    $valid_password = "password123"; // Never hardcode passwords like this in real applications

    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Handle incorrect login attempts
    if ($username == $valid_username && $password == $valid_password) {
        // Correct login
        $_SESSION['username'] = $username; // Start the session
        // Set cookie to remember user for 1 week (if user checks "Remember Me")
        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() + (86400 * 7), "/"); // 86400 = 1 day
        }
        header('Location: welcome.php');
        exit();
    } else {
        // Incorrect login
        $error_message = "Incorrect username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <label for="username">Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label for="remember">Remember Me</label>
        <input type="checkbox" name="remember"><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
</body>
</html>
