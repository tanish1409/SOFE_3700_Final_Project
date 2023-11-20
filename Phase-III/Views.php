<html>
<head>
    <title>Drug Management System</title>
    <link rel="stylesheet" type="text/css" href="Views_Database.css">
</head>
<body>
<?php
$connection = mysqli_connect("localhost:1010", "root", "qwerty122333", "drug");
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

function displayView1($connection) {
    // Query to select all rows from the 'View1' view
    $query1 = "SELECT * FROM drug.view1";
    $stmt1 = mysqli_query($connection, $query1);

    if ($stmt1) {
        // Display the results in an HTML table
        echo "<br>";
        echo "<div class='heading-container'>";
        echo "<span class='heading'>" . "View 1 <br>" . "</span>";
        echo "</div>";
        echo "<table border='1'>
                <tr>
                    <th>OrderID</th>
                    <th>CustomerName</th>
                    <th>PharmacyName</th>
                    <th>HospitalName</th>
                </tr>";

        while ($row = mysqli_fetch_array($stmt1, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['OrderID'] . "</td>";
            echo "<td>" . $row['CustomerName'] . "</td>";
            echo "<td>" . $row['PharmacyName'] . "</td>";
            echo "<td>" . $row['HospitalName'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<br>";
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }
}

function displayView2($connection) {
    // Query to select all rows from the 'View2' view
    $query2 = "SELECT * FROM drug.view2";
    $stmt2 = mysqli_query($connection, $query2);

    if ($stmt2) {
        echo "<br>";
        echo "<div class='heading-container'>";
        echo "<span class='heading'>" . "View 2 <br>" . "</span>";
        echo "</div>";
        // Display the results in an HTML table
        echo "<table border='1'>
                <tr>
                    <th>CustomerID</th>
                    <th>PharmacyID</th>
                    <th>TotalAmount</th>
                </tr>";

        while ($row = mysqli_fetch_array($stmt2, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['CustomerID'] . "</td>";
            echo "<td>" . $row['PharmacyID'] . "</td>";
            echo "<td>" . $row['TotalAmount'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<br>";
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }
}

    function displayView3($connection) {
    // Query to select all rows from the 'View3' view
    $query3 = "SELECT * FROM drug.view3";
    $stmt3 = mysqli_query($connection, $query3);

    if ($stmt3) {
        // Display the results in an HTML table
        echo "<br>";
        echo "<div class='heading-container'>";
        echo "<span class='heading'>" . "View 3 <br>" . "</span>";
        echo "</div>";
        echo "<table border='1'>
                <tr>
                    <th>OrderID</th>
                    <th>OrderDate</th>
                    <th>DeliveryDate</th>
                    <th>DeliveryStatus</th>
                    <th>CustomerName</th>
                    <th>ContactNumber</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Email</th>
                </tr>";

        while ($row = mysqli_fetch_array($stmt3, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['OrderID'] . "</td>";
            echo "<td>" . $row['OrderDate'] . "</td>";
            echo "<td>" . $row['DeliveryDate'] . "</td>";
            echo "<td>" . $row['DeliveryStatus'] . "</td>";
            echo "<td>" . $row['CustomerName'] . "</td>";
            echo "<td>" . $row['ContactNumber'] . "</td>";
            echo "<td>" . $row['Address'] . "</td>";
            echo "<td>" . $row['City'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }
}

function displayView4($connection) {
    // Query to select all rows from the 'View4' view
    $query4 = "SELECT * FROM drug.view4";
    $stmt4 = mysqli_query($connection, $query4);

    if ($stmt4) {
        // Display the results in an HTML table
        echo "<br>";
        echo "<div class='heading-container'>";
        echo "<span class='heading'>" . "View 4 <br>" . "</span>";
        echo "</div>";
        echo "<table border='1'>
                <tr>
                    <th>WarehouseName</th>
                    <th>DrugName</th>
                    <th>Quantity1</th>
                    <th>Quantity2</th>
                </tr>";

        while ($row = mysqli_fetch_array($stmt4, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['WarehouseName'] . "</td>";
            echo "<td>" . $row['DrugName'] . "</td>";
            echo "<td>" . $row['Quantity1'] . "</td>";
            echo "<td>" . $row['Quantity2'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }
}

function displayView5($connection) {
    // Query to select all rows from the 'View5' view
    $query5 = "SELECT * FROM drug.view5";
    $stmt5 = mysqli_query($connection, $query5);

    if ($stmt5) {
        // Display the results in an HTML table
        echo "<br>";
        echo "<div class='heading-container'>";
        echo "<span class='heading'>" . "View 5 <br>" . "</span>";
        echo "</div>";
        echo "<table border='1'>
                <tr>
                    <th>WarehouseID</th>
                    <th>DrugID</th>
                </tr>";

        while ($row = mysqli_fetch_array($stmt5, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['WarehouseID'] . "</td>";
            echo "<td>" . $row['DrugID'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }
}

function displayView6($connection) {
    // Query to select all rows from the 'View6' view
    $query6 = "SELECT * FROM drug.view6";
    $stmt6 = mysqli_query($connection, $query6);

    if ($stmt6) {
        // Display the results in an HTML table
        echo "<br>";
        echo "<div class='heading-container'>";
        echo "<span class='heading'>" . "View 6 <br>" . "</span>";
        echo "</div>";
        echo "<table border='1'>
                <tr>
                    <th>CustomerName</th>
                    <th>OrderCount</th>
                </tr>";

        while ($row = mysqli_fetch_array($stmt6, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['CustomerName'] . "</td>";
            echo "<td>" . $row['OrderCount'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<br>";
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }
}

function displayView7($connection) {
    // Query to select all rows from the 'View7' view
    $query7 = "SELECT * FROM drug.view7";
    $stmt7 = mysqli_query($connection, $query7);

    if ($stmt7) {
        // Display the results in an HTML table
        echo "<br>";
        echo "<div class='heading-container'>";
        echo "<span class='heading'>" . "View 7 <br>" . "</span>";
        echo "</div>";
        echo "<table border='1'>
                <tr>
                    <th>WarehouseName</th>
                    <th>UsedCapacity</th>
                    <th>Capacity</th>
                </tr>";

        while ($row = mysqli_fetch_array($stmt7, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['WarehouseName'] . "</td>";
            echo "<td>" . $row['UsedCapacity'] . "</td>";
            echo "<td>" . $row['Capacity'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<br>";
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }
}

function displayView8($connection) {
    // Query to select all rows from the 'View8' view
    $query8 = "SELECT * FROM drug.view8";
    $stmt8 = mysqli_query($connection, $query8);

    if ($stmt8) {
        // Display the results in an HTML table
        echo "<br>";
        echo "<div class='heading-container'>";
        echo "<span class='heading'>" . "View 8 <br>" . "</span>";
        echo "</div>";
        echo "<table border='1'>
                <tr>
                    <th>DrugName</th>
                    <th>ExpiryDate</th>
                </tr>";

        while ($row = mysqli_fetch_array($stmt8, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['DrugName'] . "</td>";
            echo "<td>" . $row['ExpiryDate'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<br>";
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }
}

function displayView9($connection) {
    // Query to select all rows from the 'View9' view
    $query9 = "SELECT * FROM drug.view9";
    $stmt9 = mysqli_query($connection, $query9);

    if ($stmt9) {
        // Display the results in an HTML table
        echo "<br>";
        echo "<div class='heading-container'>";
        echo "<span class='heading'>" . "View 9 <br>" . "</span>";
        echo "</div>";
        echo "<table border='1'>
                <tr>
                    <th>PharmacyName</th>
                    <th>TotalAmount</th>
                </tr>";

        while ($row = mysqli_fetch_array($stmt9, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['PharmacyName'] . "</td>";
            echo "<td>" . $row['TotalAmount'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }
}

function displayView10($connection) {
    // Query to select all rows from the 'View10' view
    $query10 = "SELECT * FROM drug.view10";
    $stmt10 = mysqli_query($connection, $query10);

    if ($stmt10) {
        // Display the results in an HTML table
        echo "<br>";
        echo "<div class='heading-container'>";
        echo "<span class='heading'>" . "View 10 <br>" . "</span>";
        echo "</div>";
        echo "<table border='1'>
                <tr>
                    <th>CustomerName</th>
                    <th>OrderDate</th>
                    <th>DeliveryStatus</th>
                </tr>";

        while ($row = mysqli_fetch_array($stmt10, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['CustomerName'] . "</td>";
            echo "<td>" . $row['OrderDate'] . "</td>";
            echo "<td>" . $row['DeliveryStatus'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<br>";
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'view' parameter is set in the POST data
    if (isset($_POST['view'])) {
        $selectedView = $_POST['view'];

        // Call the respective function based on the selected view
        switch ($selectedView) {
            case 'View1':
                displayView1($connection);
                break;
            case 'View2':
                displayView2($connection);
                break;
            case 'View3':
                displayView3($connection);
                break;
            case 'View4':
                displayView4($connection);
                break;
            case 'View5':
                displayView5($connection);
                break;
            case 'View6':
                displayView6($connection);
                break;
            case 'View7':
                displayView7($connection);
                break;
            case 'View8':
                displayView8($connection);
                break;
            case 'View9':
                displayView9($connection);
                break;
            case 'View10':
                displayView10($connection);
                break;
            default:
                echo "Invalid view selected";
        }
    }
}
?>
<nav>
    <a href="welcome.php">Home</a>
    <a href="Views.php">View</a>
    <a style="float: right;" href="logout.php">Logout</a>
</nav>
<div id="list-container">
    <form method="post" action="">
        <label id="view-heading" for="views">Choose a view to Display:</label>
        <select class="view-box" name="view">
            <option value="View1" <?php if(isset($_POST['view']) && $_POST['view'] == 'View1') echo 'selected="selected"'; ?>>View1</option>
            <option value="View2" <?php if(isset($_POST['view']) && $_POST['view'] == 'View2') echo 'selected="selected"'; ?>>View2</option>
            <option value="View3" <?php if(isset($_POST['view']) && $_POST['view'] == 'View3') echo 'selected="selected"'; ?>>View3</option>
            <option value="View4" <?php if(isset($_POST['view']) && $_POST['view'] == 'View4') echo 'selected="selected"'; ?>>View4</option>
            <option value="View5" <?php if(isset($_POST['view']) && $_POST['view'] == 'View5') echo 'selected="selected"'; ?>>View5</option>
            <option value="View6" <?php if(isset($_POST['view']) && $_POST['view'] == 'View6') echo 'selected="selected"'; ?>>View6</option>
            <option value="View7" <?php if(isset($_POST['view']) && $_POST['view'] == 'View7') echo 'selected="selected"'; ?>>View7</option>
            <option value="View8" <?php if(isset($_POST['view']) && $_POST['view'] == 'View8') echo 'selected="selected"'; ?>>View8</option>
            <option value="View9" <?php if(isset($_POST['view']) && $_POST['view'] == 'View9') echo 'selected="selected"'; ?>>View9</option>
            <option value="View10" <?php if(isset($_POST['view']) && $_POST['view'] == 'View10') echo 'selected="selected"'; ?>>View10</option>
        </select>
        <br><br>
        <button type="submit"> SHOW </button>
    </form>
</div>
</body>
</html>


