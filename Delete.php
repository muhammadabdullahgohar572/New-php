<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "Abdullah25";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully" . "<br/>";
}

// Corrected DELETE query
$deleteQuery = "DELETE FROM `userdata` WHERE `City` = 'paksitan'";

// Execute the query
if (mysqli_query($conn, $deleteQuery)) {
    echo "Record(s) deleted successfully" . "<br/>";
} else {
    echo "Error deleting record(s): " . mysqli_error($conn);
}

// Optional: Display remaining records after deletion
$selectQuery = "SELECT * FROM `userdata`";
$result = mysqli_query($conn, $selectQuery);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["sno"] . " - Name: " . $row["Name"] . " - Father Name: " . $row["FatherName"] . " - City: " . $row["City"] . "<br>";
    }
} else {
    echo "No records found";
}

// Close the connection
mysqli_close($conn);

?>