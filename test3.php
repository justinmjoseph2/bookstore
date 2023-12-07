<?php
$host = "localhost";
$user = "root";
$password = '';
$db_name = "manybook";

// Create a connection
$con = mysqli_connect($host, $user, $password, $db_name);
if (!$con) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

$username = $_POST['email'];
$password = $_POST['password'];

// Use prepared statements to prevent SQL injection
$stmt = mysqli_prepare($con, "SELECT * FROM tbl_registration WHERE username = $email AND password = $password");
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "<h1><center> Login successful </center></h1>";
    } else {
        echo "<h1> Login failed. Invalid username or password.</h1>";
    }
} else {
    echo "Error in the SQL query: " . mysqli_error($con);
}

// Close the connection
mysqli_close($con);
?>
