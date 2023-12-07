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

$current_date = date("Y-m-d");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $genre = $_POST['genre'];
    $publ_date = $_POST['publ_date'];
    $pdfFile = $_FILES['pdf'];
    $imgFile = $_FILES['img_cover'];
    $pdfFileName = $pdfFile['name'];
    $imgFileName = $imgFile['name'];
    $pdfTmpName = $pdfFile['tmp_name'];
    $imgTmpName = $imgFile['tmp_name'];
    $uploadDir = 'uploads/pdf/';

    // Generate unique filenames for PDF and image files
    $pdfNewFileName = uniqid() . '_' . $pdfFileName;
    $imgNewFileName = uniqid() . '_' . $imgFileName;

    $pdfPath = $uploadDir . $pdfNewFileName;
    $imgPath = $uploadDir . $imgNewFileName;

    $allowedImageTypes = ['image/jpeg', 'image/png', 'image/gif']; // Add more allowed types if needed
    $maxFileSize = 200 * 1024 * 1024; // 200MB in bytes

    if (in_array($_FILES['img_cover']['type'], $allowedImageTypes) && $_FILES['pdf']['size'] <= $maxFileSize) {
        // Validate the publ_date
        $publ_date_timestamp = strtotime($publ_date);
        $current_date_timestamp = strtotime($current_date);

        if ($publ_date_timestamp > $current_date_timestamp) {
            ?>
            <script>
                alert("Publication date must not be later than the current date.");
                window.history.go(-1);
            </script>
            <?php
        } else {
            // Move the files to the upload directory
            if (move_uploaded_file($pdfTmpName, $pdfPath) && move_uploaded_file($imgTmpName, $imgPath)) {
                // Insert PDF details into the database
                $sql = "INSERT INTO pdfs (title, author, description, genre, publ_date, file_path, img_path, up_date, rating) VALUES ('$title', '$author', '$description', '$genre', '$publ_date', '$pdfPath', '$imgPath', CURDATE(), '0')";

                if ($conn->query($sql) === TRUE) {
                    // Deletion of requests
                    $deleteRequestSql = "DELETE FROM request WHERE title IN (SELECT title FROM pdfs)";
                    $conn->query($deleteRequestSql);

                    ?>
                    <script>
                        alert("Upload Successful");
                        window.location.href = document.referrer; // Redirect to the previous page
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("Failed to upload");
                        window.history.go(-1);
                    </script>
                    <?php
                }
                $conn->close();
            } else {
                ?>
                <script>
                    alert("Failed to upload");
                    window.history.go(-1);
                </script>
                <?php
            }
        }
    } else {
        ?>
        <script>
            alert("Invalid image file type or file size exceeds the limit (200MB). Allowed types: JPG, PNG, GIF");
            window.history.go(-1);
        </script>
        <?php
    }
}
?>
