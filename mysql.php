<?Php

echo "Data base connect"."<br/>";

$severname = "localhost";
$password = "";
$username = "root";

$conn = mysqli_connect($severname,  $username, $password,);


if (!$conn) {
    die("soory your conection fail ".mysqli_connect_error());
}else{
    echo "your database connected successfully";
}
?>