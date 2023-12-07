<?php
$filename = $_GET['filename']; // Get the filename from the URL parameter

if (!empty($filename)) {
    $filepath = $filename; // Set the path to your PDF files
    if (file_exists($filepath)) {
        // Set the appropriate headers for a file download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename. '"');
        header('Content-Length: ' . filesize($filepath));
        
        // Output the file contents to the browser
        readfile($filepath);
        exit;
    } else {
        echo 'File not found.';
    }
} else {
    echo 'Invalid filename.';
}
?>
