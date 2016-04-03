<?php
$servername = "localhost";
$username = "root";
$password = "q1q1q1";
$dbname = "parking_monitor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO garage (sensor, distance)
VALUES ('".$_GET["serial"]."', '".$_GET["distance"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
