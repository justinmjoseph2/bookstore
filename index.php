<?php 
    include("connection.php");
    include("login.php")
    ?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
            body{
    background-image: url("images/Log.jpg");
    max-width: 2200px;
	height: 700px;
	background-repeat: no-repeat;
    background-size: 100%;
    overflow: hidden;
                
}


#btn{
    color:rgb(0, 0, 0);
    background-color: 	rgb(255, 255, 255);
    padding:10px;
    font-size: large;
    border-radius: 5px;
    width: 90%;
    height: 40px;
    border-width: 1;
}

@media screen and (max-width: 570px) {
    #form {
      width: 65%;
      margin-left:none;
      padding:40px;
      height: auto;
    }
  }
        </style>
    </head>
    <body>
    <div class="log_img" style="text-align: center;">
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br>

    <div class="box1" style="margine-top: 100px;
    background: transparent; opacity:7;
	backdrop-filter: blur(10px);
	box-shadow: 10px 10px 10px 10px rgba(0.5, 0.5, 0.5, 0.5);
    border-radius: 10px;">
        <div class="login" >
            <h1 style="color: black;">Login</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                
                <input type="text" id="user" name="user" placeholder="Email" style="width: 90%; height: 40px;color: black; border: 0; border-radius: 10px; " required></br></br>
                <input type="password" id="pass" name="pass" placeholder="Password" style="width: 90%; height: 40px; color: black; border: 0; border-radius: 10px;" required></br></br>
                <input type="submit" id="btn" value="Login" name = "submit" style="color: black; font-weight: bolder; border: 0; border-radius: 10px; ">
                <p style="color: white; padding-left: 15px;">
        <br>
        <a style="color:#ff6666; text-decoration: none;" href="update_password.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp 
        New to this website?<a style="color: #ff6666; text-decoration: none;" href="registration.php">&nbspSign Up</a>&nbsp &nbsp &nbsp &nbsp &nbsp 
      </p>
            </form>
        </div>
    </div>
    </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" email and password field are empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" email field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>