<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    if (filter_var($inputUsername, FILTER_VALIDATE_EMAIL)) {
        // Set session variables
        $_SESSION['username'] = $inputUsername;
    
        // Set cookies (expires in 7 days)
        setcookie('username', $inputUsername, time() + (86400 * 7), "/");
    
        // Redirect to a protected page
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid email format.";
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
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
