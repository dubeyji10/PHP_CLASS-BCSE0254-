<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Assignment1";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "<font color=red>Connected successfully database selected = $database<br></font>";

// $conn->close();

// connection not closed now
?>
