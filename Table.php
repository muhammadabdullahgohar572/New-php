<?Php

echo "Data base connect" . "<br/>";

$severname = "localhost";
$password = "";
$username = "root";

$conn = mysqli_connect($severname,  $username, $password,);


if (!$conn) {
    die("soory your conection fail " . mysqli_connect_error());
} 
else {
    echo "Create Database Abdullah25";
}

$createtable = "CREATE TABLE `abdullah25`.`Phpstudent` (`sno` INT NOT NULL AUTO_INCREMENT , `Roll` INT(100) NOT NULL , `Name` INT(20) NOT NULL , `Fathername` INT(20) NOT NULL , `City` INT(20) NOT NULL , PRIMARY KEY (`sno`))";


$result = mysqli_query($conn, $createtable);
if ($result) {
    echo "your table created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
    echo "<script>alert('Error creating database');</script>";
}