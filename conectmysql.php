<?Php

echo "Data base connect" . "<br/>";

$severname = "localhost";
$password = "";
$username = "root";

$conn = mysqli_connect($severname,  $username, $password,);


if (!$conn) {
    die("soory your conection fail " . mysqli_connect_error());
} else {
    $sql = "Create Database Abdullah25";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Database created successfully";
    }
  else{
    echo "Error creating database: ". mysqli_error($conn);
  }
}