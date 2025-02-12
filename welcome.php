<?php
session_start();

// Check if the user is logged in by verifying session and cookie
if (!isset($_SESSION['username']) || !isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>You are logged in.</p>
    <a class='btn btn-primary' href="logout.php">Logout</a>
    <a class='btn btn-primary' href="insert.php">Insert</a>
    <a class='btn btn-primary' href="all_data.php">Show</a>
</body>
</html>
