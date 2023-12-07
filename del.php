<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);   
 
if (isset($_GET['id'])) {  
     $id = $_GET['id'];  
     $query = "DELETE FROM `pdfs` WHERE id = '$id'";  
     $run = mysqli_query($conn,$query);  
     if ($run) {  
        ?>
		<script>
		alert("Record Deleted")
		window.history.back();
        window.location.reload();
        window.location.replace(search_book.php)
		</script>
		<?php
     }else{  
          echo "Error: ".mysqli_error($conn);  
     }  
}  
?>  