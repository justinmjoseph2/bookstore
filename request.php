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
    $title = $_POST['title'];
    $author = $_POST['author'];

    // Check if the title and author already exist in the 'pdfs' table
    $checkQuery = "SELECT * FROM pdfs WHERE title = ? AND author = ?";
    $stmtCheck = $conn->prepare($checkQuery);

    if ($stmtCheck) {
        $stmtCheck->bind_param("ss", $title, $author);
        $stmtCheck->execute();
        $result = $stmtCheck->get_result();

        if ($result->num_rows > 0) {
            // Book already exists in the database
            ?>
            <script>
                alert("Book already exists in the database!");
                window.history.go(-1);
            </script>
            <?php
            exit(); // Exit the script
        }
    } else {
        ?>
        <script>
            alert("Failed to check existing records!");
            window.history.go(-1);
        </script>
        <?php
        exit(); // Exit the script
    }

    // If the book doesn't exist, proceed to insert the request
    $sql = "INSERT INTO request (title, author, req_date) VALUES (?, ?, CURDATE())";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $title, $author);

        if ($stmt->execute()) {
            // Insertion was successful
            $stmt->close();
            $conn->close();
            ?>
            <script>
                alert("Request Uploaded");
                window.history.go(-1);
            </script>
            <?php
        } else {
            // Error occurred while executing the query
            ?>
            <script>
                alert("Failed to Send Request! Try again");
                window.history.go(-1);
            </script>
            <?php
        }
    } else {
        // Error occurred while preparing the statement
        ?>
        <script>
            alert("Failed to prepare the statement");
            window.history.go(-1);
        </script>
        <?php
    }
}
?>
