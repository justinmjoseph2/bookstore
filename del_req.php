<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);   
 
if (isset($_GET['req_id'])) {  
     $req_id = $_GET['req_id'];  
     $query = "DELETE FROM `request` WHERE req_id = '$req_id'";  
     $run = mysqli_query($conn,$query);  
     if ($run) {  
        ?>
		<script>
		alert("Request Deleted")
		window.history.back();
        window.location.reload();
        window.location.replace(admin_requests.php)
		</script>
		<?php
     }else{  
          echo "Error: ".mysqli_error($conn);  
     }  
}  
?>  