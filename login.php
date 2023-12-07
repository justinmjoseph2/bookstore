<?php
    include('connection.php');
    session_start();

    if (isset($_POST['submit'])) {
        $email = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM tbl_registration WHERE email = '$email' AND password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 

        if ($email == "ADMIN@001" AND $password == "Admin@1234") {
            // Admin login
            $_SESSION['user_id'] = 'admin';
            header("Location: admin.php");
            exit();
        } 
        elseif ($count == 1) {
            // User login
            $_SESSION['user_id'] = $row['user_id']; // Assuming 'user_id' is the primary key of your user table
            header("Location: shop-grid.php");
            exit();
        }  
        else {
            // Login failed
            echo  '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid email or password!!");
                    </script>';
        }     
    }
?>
