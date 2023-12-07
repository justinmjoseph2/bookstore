<?php
    session_start();
    include('connection.php');
    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit();
    }

    // Retrieve user information
    $user_id = $_SESSION['user_id'];

    // Use $user_id to fetch additional user data from the database if needed

  

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Update the user's details in the database
        $sql_update_details = "update tbl_registration set name = '$name', email = '$email' where id = $id";
        mysqli_query($conn, $sql_update_details);

        // Redirect the user to the edit_details page
        header("Location: edit_details.php");
    }
?>