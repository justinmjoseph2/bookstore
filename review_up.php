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

if (isset($_POST['review']) && isset($_GET['id'])) {
    $user_id = $_POST['user_id'];
    $review = $_POST['review'];
    $book_id = $_POST['id'];

    // Insert the review into tbl_review
    $sql = "SELECT p.id, t.user_id
    FROM pdfs p, tbl_registration t
    WHERE p.id = '$id' AND t.user_id = '$user_id';
    INSERT INTO tbl_review (id, user_id, review, date)
    VALUES ('$id', '$user_id', '$review', CURDATE());";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ss", $review, $book_id);

    if ($stmt->execute()) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
