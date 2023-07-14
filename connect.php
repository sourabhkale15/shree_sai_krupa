<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "milk_shop";

// Create a connection to MySQL
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
//echo "Connected successfully";
//include("try.php");
}
?>
