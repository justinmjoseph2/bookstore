<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
$email = $_POST['email'];
$password = $_POST['password'];

if (strlen($password) < 8) {
  echo '<script>alert("Password must be at least 8 characters long.");</script>';
  echo '<script>window.history.go(-1);</script>';
  exit();
}

// Check character types
if (!preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password) || !preg_match("/[0-9]/", $password) || !preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $password)) {
  echo '<script>alert("Password must include at least one uppercase letter, one lowercase letter, one number, and one special character.");</script>';
  echo '<script>window.history.go(-1);</script>';
  exit();
}

// Check for common passwords (you need a list of common passwords)
$commonPasswords = ["password", "123456", "qwerty", "letmein"];
if (in_array($password, $commonPasswords)) {
  echo '<script>alert("Please choose a stronger password.");</script>';
  echo '<script>window.history.go(-1);</script>';
  exit();
}

// Check for username or email in the password (replace with actual values)


// You can add more checks for dictionary words, sequential characters, etc., as needed.

// If all checks pass, the password is valid.


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Invalid email format
    echo '<script>alert("Invalid email address. Please enter a valid email.");</script>';
    echo '<script>window.history.go(-1);</script>';
    exit();
}
$phno = $_POST['phno'];

if (!preg_match("/^[0-9]{10}$/", $phno)) {
    // Invalid phone number format (10 digits)
    echo '<script>alert("Invalid phone number. Please enter a 10-digit phone number.");</script>';
    echo '<script>window.history.go(-1);</script>';
    exit();
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_1 = $_POST["password_1"];

    // Check if password matches
    if ($password_1 != $password) {
        ?>
        <script>
            alert("Password not matching");
            window.history.go(-1);
        </script>
        <?php
    } else {
        // Check if email, and phone already exist
        $email_query = "SELECT * FROM tbl_registration WHERE email = '$email'";
        $phone_query = "SELECT * FROM tbl_registration WHERE phno = '$phno'";

        $email_result = $conn->query($email_query);
        $phone_result = $conn->query($phone_query);

        if ($email_result->num_rows > 0) {
            ?>
            <script>
                alert("Email already exists. Please use a different email address.");
                window.history.go(-1);
            </script>
            <?php
        } elseif ($phone_result->num_rows > 0) {
            ?>
            <script>
                alert("Phone number already exists. Please use a different phone number.");
                window.history.go(-1);
            </script>
            <?php
        
        } else {
            // Insert the new record into the database
            $sql = "INSERT INTO tbl_registration (name, phno, email, password, user_up_date)
                    VALUES ('$name', '$phno', '$email', '$password', CURDATE())";

            if ($conn->query($sql) === TRUE) {
                ?>
                <script>
                    alert("Registration Successfull. Please Login.");
                    
                </script>
                
                <?php
                include("index.html");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    $conn->close();
}
?>
