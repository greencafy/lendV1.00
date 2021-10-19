<?php
$servername = "localhost";
$database = "lendpal";
$username = "root";
$password = "root";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn->mysqli_connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>