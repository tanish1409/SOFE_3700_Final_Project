<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost:1010";
$dbname = "drug";
$dbUsername = "root";
$dbPassword = "qwerty122333";

header('Content-Type: application/json');

function checkOldPassword($customerId, $oldPassword) {
    global $host, $dbname, $dbUsername, $dbPassword;

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM Customer WHERE CustomerID = :customerId AND Password = :oldPassword";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':customerId', $customerId, PDO::PARAM_INT);
        $statement->bindParam(':oldPassword', $oldPassword, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return ($result !== false);
    } catch (PDOException $e) {
        return false;
    } finally {
        $pdo = null;
    }
}

function updatePassword($customerId, $oldPassword, $newPassword) {
    global $host, $dbname, $dbUsername, $dbPassword;

    if (!checkOldPassword($customerId, $oldPassword)) {
        echo json_encode(['success' => false, 'message' => 'Old password is incorrect.']);
        return;
    }

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "UPDATE Customer SET Password = :newPassword WHERE CustomerID = :customerId";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':newPassword', $newPassword, PDO::PARAM_STR);
        $statement->bindParam(':customerId', $customerId, PDO::PARAM_INT);
        $statement->execute();

        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    } finally {
        $pdo = null;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if 'username', 'oldPassword', and 'newPassword' parameters exist in the POST data
    if (isset($_POST['username']) && isset($_POST['oldPassword']) && isset($_POST['newPassword'])) {
        $customerId = $_POST['username'];
        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];
        updatePassword($customerId, $oldPassword, $newPassword);
    } else {
        echo json_encode(['error' => 'Missing parameters.']);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed.']);
}
?>
