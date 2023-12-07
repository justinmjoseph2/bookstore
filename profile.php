<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from tbl_registration where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  
        
$count = mysqli_num_rows($result); 

        if ($count == 1) {
            $id = $row['id'];

            // Get the user's current details
            $sql_get_details = "select * from tbl_registration where id = $id";
            $result_get_details = mysqli_query($conn, $sql_get_details);
            $row_get_details = mysqli_fetch_array($result_get_details, MYSQLI_ASSOC);

            // Display a form with the user's current details
            echo '<form action="edit_details.php" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="text" name="name" value="' . $row_get_details['name'] . '">
                <input type="text" name="email" value="' . $row_get_details['email'] . '">
                <input type="submit" name="submit" value="Save">
            </form>';
        } else {
            echo 'Invalid email or password.';
        }
    } else {
        echo '<form action="edit_details.php" method="post">
            <input type="text" name="user" placeholder="Email">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" name="submit" value="Login">
        </form>';
    }
?>