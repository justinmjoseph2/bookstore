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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    // You should always use prepared statements to prevent SQL injection
    $sql = "INSERT INTO contact (name, mail, message, date) VALUES (?, ?, ?, CURDATE())";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        // Bind parameters and execute the statement
        $stmt->bind_param("sss", $name, $mail, $message);
        
        if ($stmt->execute()) {
            // Insertion was successful
            $stmt->close();
            $conn->close();
            ?>
            <script>
                alert("Message Delivered Successfully");
                window.history.go(-1);
            </script>
            <?php
        } else {
            // Error occurred while executing the query
            ?>
            <script>
                alert("Failed to Send! Try again");
                window.history.go(-1);
            </script>
            <?php
        }
    } else {
        // Error occurred while preparing the statement
        ?>
        <script>
            alert("Failed to prepare the statement");
        </script>
        <?php
    }
}
?>
