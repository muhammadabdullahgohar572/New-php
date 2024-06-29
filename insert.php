<?php
echo "Data base connect" . "<br/>";

$severname = "localhost";
$password = "";
$username = "root";
$databasename = "Abdullah25";

$conn = mysqli_connect($severname,  $username, $password, $databasename);
if (!$conn) {
    die("soory your conection fail " . mysqli_connect_error());
} else {
    echo "Create Database Abdullah25";
}

$sql = "INSERT INTO `userData` (`sno`, `Name`, `FatherName`, `City`) VALUES ('2', 'Ali', 'umer', 'paksitan')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "your table Data   successfully Insert";
} else {
    echo "Error creating database: " . mysqli_error($conn);
    echo "<script>alert('Error creating database');</script>";
}
?>