<?php
$hostname = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'datapdf';
// Connect to MySQL
$conn = mysqli_connect($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>