<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="Welcome_Database.css">
</head>
<body>

<nav>
    <a href="welcome.php">Home</a>
    <a href="Views.php">View</a>
    <a href="order.html">Order</a>
    <a style="float: right;" href="logout.php">Logout</a>
</nav>

<h2>Welcome, <?php echo $username; ?>!</h2>
<p>This is the welcome page.</p>

</body>
</html>
