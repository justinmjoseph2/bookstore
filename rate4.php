<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['id'])) {
    $pdf_id = $_GET['id'];
    $sql = "UPDATE pdfs SET rating = rating+4 WHERE id = $pdf_id";

    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert("review updated")
            window.history.go(-1);
        </script>
        <?php
    } else {
        echo "Error updating rating: " . $conn->error;
        ?>
        <script>
            window.history.go(-1);
        </script>
        <?php
    }
}
// Close the database connection
$conn->close();
?>
