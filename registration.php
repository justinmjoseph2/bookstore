<?php
  include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body style="overflow-y: hidden">

  <div class="reg_img" style="overflow: hidden; background-image: url('images/regback.jpg');">
    <br><br><br>
    <br><br><br>

    <div class="box2" style="height: 450px; margine-top: 200px;
    background: transparent; opacity:7;
	backdrop-filter: blur(10px);
	box-shadow: 10px 10px 10px 10px rgba(0.5, 0.5, 0.5, 0.5); border-radius: 10px; ">
        <h1 style="text-align: center; font-size: 25px; color:black;">User Registration</h1>

      <form name="Registration" action="test1.php" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="name" placeholder="Name" required="" style="border: 0; border-radius: 10px;"> <br>
		      <input class="form-control" type="text" name="phno" placeholder="Phone No" required="" style="border: 0; border-radius: 10px;"><br>
          <input class="form-control" type="text" name="email" placeholder="Email" required="" style="border: 0; border-radius: 10px;"><br>
          <input class="form-control" type="password" name="password" id="password" placeholder="Password" required="" style="border: 0; border-radius: 10px;"> <br>
          <input class="form-control" type="password" name="password_1" id="password_1" placeholder="Password" required="" style="border: 0; border-radius: 10px;"> <br>
          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> 
		  </div>
		        <p style="color: white; padding-left: 15px;">
        <br><br>
		          <a style="color: #ff6666; text-decoration: none;" href="index.php">Already Have An Account?</a>
      </form>
     
    </div>
  </div>
  

</body>
</html>