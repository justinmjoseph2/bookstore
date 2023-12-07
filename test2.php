<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


		$name = $_POST['name'];
		$phone =  $_POST['phone'];
		$username = $_POST['username'];
        $password = $_POST['password'];
        

$sql = "INSERT INTO ex (name, phone, username, password)
VALUES ('$name', '$phone', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
  include ('logout.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>