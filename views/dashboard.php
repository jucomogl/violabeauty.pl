<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /login');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome to the Admin Dashboard, <?php echo $_SESSION['user']['username']; ?>!</h2>
    <a href="/logout">Logout</a>
</body>
</html>
