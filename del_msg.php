<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);   
 
if (isset($_GET['mid'])) {  
     $mid = $_GET['mid'];  
     $query = "DELETE FROM `contact` WHERE mid = '$mid'";  
     $run = mysqli_query($conn,$query);  
     if ($run) {  
        ?>
		<script>
		alert("Record Deleted")
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