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

<div id="map"></div>
<script type="text/javascript">
    function initMap() {
    var location = {lat: 43.945801, lng: -78.894600};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: location
    });
    var marker = new google.maps.Marker({position: location, map: map});
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8ei3_SbV54_czY6FB6SOS4gObcGi8sZ0&callback=initMap"></script>

</body>
</html>
