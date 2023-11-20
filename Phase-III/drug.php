<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost:1010";
$dbname = "drug";
$username = "root";
$password = "qwerty122333";

header('Content-Type: application/json');


function getAvailableDrugs() {
    global $host, $dbname, $username, $password;

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT s.DrugID, d.DrugName, s.WarehouseID, s.DrugQuantity 
                  FROM Stock s
                  JOIN Drug d ON s.DrugID = d.DrugID";

        $statement = $pdo->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $stockData = array();
        foreach ($result as $row) {
            $stockData[] = array(
                'DrugID' => $row['DrugID'],
                'DrugName' => $row['DrugName'],
                'WarehouseID' => $row['WarehouseID'],
                'DrugQuantity' => $row['DrugQuantity']
            );
        }
        echo json_encode($stockData);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    } finally {
        $pdo = null;
    }
}



if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    getAvailableDrugs();
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed.']);
}
?>
