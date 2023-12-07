<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Retrieve user information
$user_id = $_SESSION['user_id'];

// Establish a database connection (replace with your database connection details)
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "manybook";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);




// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Sanitize and validate input data


   
    $phno = mysqli_real_escape_string($conn, $_POST['phno']);
    $phno_query = "SELECT * FROM tbl_registration WHERE phno = '$phno'";
    $phone_result = $conn->query($phno_query);

    // Update user data in the database
    $updateQuery = "UPDATE tbl_registration SET phno='$phno' WHERE user_id='$user_id'";
}
    
    if (!preg_match("/^[0-9]{10}$/", $phno)) {
        // Invalid phone number format (10 digits)
        echo '<script>alert("Invalid phone number. Please enter a 10-digit phone number.");</script>';
        echo '<script>window.history.go(-1);</script>';
        exit();
    }
    
    // Check the connection
  
  
    if ($phone_result->num_rows > 0) {
        ?>
        <script>
            alert("Phone number already exists. Please use a different phone number.");
            window.history.go(-1);
        </script>
        <?php
        }
    elseif ($conn->query($updateQuery) === TRUE) {
        ?>
        <script>
       alert("Data Updated Successfully.");  
       window.history.go(-1).reload;   
        </script>
        <?php
    }   if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


// Close the database connection
$conn->close();
?>
