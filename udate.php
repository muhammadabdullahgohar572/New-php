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

// Corrected SQL query
// $sql = "SELECT * FROM userData WHERE City = ' karachi'";
$sql = "SELECT * FROM userData";
// $update = "UPDATE `userdata` SET `Name` = 'Mahammad' WHERE `userdata`.`sno` = 10";
$result = mysqli_query($conn, $sql);
$num = 1;

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo $num . " - Name: " . $row["Name"] . " - Father Name: " . $row["FatherName"] . " - City: " . $row["City"] . "<br>";
        $num++;
    }
} else {
    echo "0 results";
}

$update1 = "UPDATE `userdata` SET `Name` = 'Muhammad' WHERE `userdata`.`sno` = 9";
if (mysqli_query($conn, $update1)) {
    echo "Record updated successfully for sno 10<br/>";
} else {
    echo "Error updating record for sno 10: " . mysqli_error($conn) . "<br/>";
}


?>