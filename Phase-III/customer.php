<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost:1010";
$dbname = "drug";
$dbUsername = "root";
$dbPassword = "qwerty122333";

header('Content-Type: application/json');

function getUserProfile($customerId) {
    global $host, $dbname, $dbUsername, $dbPassword;

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM Customer WHERE CustomerID = :customerId";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':customerId', $customerId, PDO::PARAM_INT);
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'User not found.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    } finally {
        $pdo = null;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if 'username' parameter exists in the URL
    if (isset($_GET['username'])) {
        $customerId = $_GET['username'];
        getUserProfile($customerId);
    } else {
        echo json_encode(['error' => 'Username parameter missing.']);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed.']);
}
?>
