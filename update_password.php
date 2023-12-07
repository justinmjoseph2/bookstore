<?php 
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>

	<style type="text/css">
		body
		{
			height: 650px;
			background-image: url("images/forg.jpg");
			background-repeat: no-repeat;
		    background-size: 1700px 900px;
		}
		.wrapper
		{
			width: 400px;
			height: 400px;
			margin:200px auto;
			background: transparent;
			backdrop-filter: blur(10px);
			box-shadow: 10px 10px 10px 10px rgba(0.5, 0.5, 0.5, 0.5);
			opacity: 7;
			color: white;
			padding: 27px 15px;
			border-radius: 10px;
		}
		.form-control
		{
			width: 300px;
		}
	</style>
</head>
<body>
	
	<div class="wrapper">
		<div style="text-align: center;">
			<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;color: black;">Change Your Password</h1>
		</div>
		<div style="padding-left: 30px; ">
		<form action="" method="post" >
			<input type="text" name="email" class="form-control" placeholder="Email" required="" style="border: 0; border-radius: 10px;"><br>
			<input type="password" name="password" class="form-control" placeholder="New Password" required="" style="border: 0; border-radius: 10px;"><br>
			<input type="password" name="password_1" class="form-control" placeholder="Confirm Password" required="" style="border: 0; border-radius: 10px;"><br>
			<button class="btn btn-default" type="submit" name="submit" >Update</button> &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="index.html" style="color:#ff6666;">Cancell</a>
		</form>

	</div>
	
	<?php


		if(isset($_POST['submit']))
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			$password_1 = $_POST["password_1"];
			$email_query = "SELECT * FROM tbl_registration WHERE email = '$email'";
			$email_result = $conn->query($email_query);
			if ($email_result->num_rows < 1) {
				?>
				<script>
					alert("Email not found in the server. try to register..");
					window.history.go(-1);
				</script>
				<?php
			}
			if ($password_1 != $password) {
				?>
				<script>
					alert("Password not matching");
				</script>
				<?php
			} 
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
			  
			  
			  
			  if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
			
				// Check if email, and phone already exist

				
			  }else {
					// Insert the new record into the database
					$sql = "UPDATE tbl_registration SET password='$_POST[password]' WHERE email='$_POST[email]';";
		
					if ($conn->query($sql) === TRUE) {
						?>
						<script>
							alert("Password Updated Successfully.");
							
						</script>
						
						<?php
					} else {
						?>
						<script>
						alert("Something went wrong. try again later.");
						window.history.go(-1);
					</script>
					<?php
					}
			
			}
		}
	
	?>
	</div>
	</div>
</body>
</html>