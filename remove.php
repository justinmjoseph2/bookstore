<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$user_id = $_GET['user_id'];
$deletquery = "DELETE FROM `tbl_registration` WHERE user_id=$user_id";
$query = mysqli_query($conn,$deletquery);
header('location:admin.php');
?>