<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate the user
        $stmt = $conn->prepare("SELECT * FROM Customer WHERE CustomerID = ? AND Password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Successful login
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            // Invalid credentials
            $login_error = "Invalid username or password";
        }
        $stmt->close();
    } elseif (isset($_POST['signup'])) {
        $username = $_POST['signup_username'];
        $password = $_POST['signup_password'];
        $name = $_POST['customerName'];
        $contactNumber = $_POST['contactNumber'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $streetName = $_POST['streetName'];
        $postalCode = $_POST['postalCode'];
        $aptNo = $_POST['aptNo'];
        $city = $_POST['city'];
        $email = $_POST['email'];


        // Check if the username already exists
        $stmt = $conn->prepare("SELECT * FROM Customer WHERE CustomerID = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Username already exists
            $signup_error = "Username already exists. Please choose a different username.";
        } else {
            // Insert the new user
            $stmt = $conn->prepare("INSERT INTO Customer (CustomerID, CustomerName, ContactNumber, Address, State, StreetName, PostalCode, AptNo, City, Email, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("issssssssss", $username, $name, $contactNumber, $address, $state , $streetName , $postalCode, $aptNo, $city, $email, $password);
            $stmt->execute();
            
            // Redirect to the login page after successful signup
            header("Location: welcome.php");
            exit();
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup</title>
    <link rel="stylesheet" href="Main_Database.css">
    <script>
        function showLogin() {
            document.getElementById('loginForm').style.display = 'block';
            document.getElementById('signupForm').style.display = 'none';
        }

        function showSignup() {
            document.getElementById('signupForm').style.display = 'block';
            document.getElementById('loginForm').style.display = 'none';
        }
    </script>
</head>
<body>

<h2>Login or Signup</h2>

<button onclick="showLogin()">Login</button>
<button onclick="showSignup()">Signup</button>

<!-- Login Form -->
<form id="loginForm" method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <input type="submit" name="login" value="Login">
</form>

<!-- Signup Form -->
<form id="signupForm" method="post" action="" class="hidden">
    <label for="signup_username">Username:</label>
    <input type="text" id="signup_username" name="signup_username" required>
    <br>
    <label for="signup_password">Password:</label>
    <input type="password" id="signup_password" name="signup_password" required>
    <br>
    <label for="customerName">Customer Name:</label>
    <input type="text" name="customerName" required><br>
    <label for="contactNumber">Contact Number:</label>
    <input type="text" name="contactNumber" required><br>
    <label for="address">Address:</label>
    <input type="text" name="address" required><br>
    <label for="state">State:</label>
    <input type="text" name="state" required><br>
    <label for="streetName">Street Name:</label>
    <input type="text" name="streetName" required><br>
    <label for="postalCode">Postal Code:</label>
    <input type="text" name="postalCode" required><br>
    <label for="aptNo">Apt No:</label>
    <input type="text" name="aptNo" required><br>
    <label for="city">City:</label>
    <input type="text" name="city" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    <input type="submit" name="signup" value="Sign Up">
</form>

<?php
if (isset($login_error)) {
    echo "<p>$login_error</p>";
}

if (isset($signup_error)) {
    echo "<p>$signup_error</p>";
}
?>

</body>
</html>
