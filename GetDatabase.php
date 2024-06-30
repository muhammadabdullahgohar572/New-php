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


$sql = "SELECT * FROM userData";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Name: ". $row["Name"]. " - Father Name: ". $row["FatherName"]. " - City: ". $row["City"]. "<br>";
  }

}

?>