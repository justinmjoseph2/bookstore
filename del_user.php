<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);   
 
if (isset($_GET['user_id'])) {  
     $user_id = $_GET['user_id'];  
     $query = "DELETE FROM `tbl_registration` WHERE user_id = '$user_id'";  
     $run = mysqli_query($conn,$query);  
     if ($run) {  
        ?>
		<script>
		alert("User Deleted")
		window.history.back();
        window.location.reload();
        window.location.replace(admin.php)
		</script>
		<?php
     }else{  
          echo "Error: ".mysqli_error($conn);  
     }  
}  
?>  