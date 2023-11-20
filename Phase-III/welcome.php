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
    <a href="drug.html?username=<?php echo urlencode($username); ?>">Inventory</a>
    <a href="customer.html?username=<?php echo urlencode($username); ?>">User Profile</a>
    <a style="float: right;" href="logout.php">Logout</a>
</nav>

<h1>Welcome, <?php echo $username; ?>!</h1>
<p>This is the Main page of the Final Project of Database Management Course.</p>
<p>Here you can navigate through the tabs to scope the goal of the project.</p><br><br>
<ul>
    <li>The View Tab Highlights the 10 Views from the Phase-II</li>
    <li>The Inventory Tab Highlights one RESTful API Get query using JSON</li>
    <li>The User Profile Tab Highlights the second RESTful API using GET and POST queries with JSON</li>
</ul>


</body>
</html>
