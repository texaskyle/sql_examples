<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "restaurant";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if (!$conn) {
   die("connection failed: ".mysqli_connect_error());
}else {
    echo "database connected successfully<br>";
}
?>