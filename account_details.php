<?php
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit();
    }

    // Retrieve user information
    $user_id = $_SESSION['user_id'];

    // Establish a database connection (replace with your database connection details)
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "manybook";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>



<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Profile</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<style>
    body{
    background-image: url("images/Log.jpg");
    max-width: 2200px;
	height: 700px;
	background-repeat: no-repeat;
    background-size: 100%;
    overflow: hidden;
                
}
.box1
{
	height: auto;
	width: 500px;
	background-color: black;
	margin: 0px auto;
	opacity: .7;
	color: white;
	padding: 20px;
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
			h1{
  font-size: 30px;
  color: #000000;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
h5{
	 font-size: 20px;
	color: #000000;
	text-transform: uppercase;
	font-weight: 700;
    text-align: left;
    margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 500;
  font-size: 12px;
  color:#000000;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
.fa fa-trash{
	font-size: 20px;
    color: #F50057;
}

/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

section{
  margin: 50px;
}

body{
    background-image: url("images/upbg.jpg");
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
/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
	</style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->

        <div class="humberger__menu__contact">
            <ul>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./shop-grid.php"><img src="img/lo.png" style="height: 100px;width: 100px;" alt=""></a>	
                    </div>
                </div>
                <div class="col-lg-6" style="width:700px">
                    <nav class="header__menu" style="width:700px">
                        <ul>
                            <li style="padding-right: 100px;padding-top: 20px;"><a href="./shop-grid.php">Shop</a></li>
                            <li style="padding-right: 100px;padding-top: 20px;"><a href="./request1.php">Request</a></li>	
                            <li style="padding-right: 50px;padding-top: 20px;"><a href="./contact.php">Contact</a></li>	

                            <div class="hero__search__phone">


                            
                                	<li><i class="fa fa-user" style="padding-right:20px;padding-top: 20px;">
								<ul class="header__menu__dropdown">
                                    <li><a href="update_password.php">Update Password</a></li>
                                    <li><a href="logout.php">Log Out</a></li>
                                </ul></i></li>								 
                            
                        </div>
                        <div class="hero__search__phone">


                            
                                <li><i class="fa fa-bars" style="padding-right:20px;padding-top: 20px;"></i>
								<ul class="header__menu__dropdown" style="width:300px; max-height:700px; min-height:500px; overflow-y: scroll ">
                                <h4 style="color:white;padding-left: 20px;">Requests</h4>
                                    <li><br><br><?php

$conn = mysqli_connect("localhost", "root", "", "manybook");  






	$sql = "SELECT * 
    FROM `request` 
    ORDER BY req_date ASC
    LIMIT 30";
    $run = mysqli_query($conn, $sql); 
	{
		?>

     
        <div>
        <table>
                            

<div>
                        <?php  
                        $i=1;
                        if($num = mysqli_num_rows($run)>0)  {  
                            
                        while($result = mysqli_fetch_assoc($run))  
                            {  
                            ?> 
                          
                               <tr> 					  
                                <td style="padding-left: 20px;"><h6 style="text-align: left;color:white">Book Title : <?php echo $result['title']?></h6><br>
                                <h6 style="text-align: left;color:white">Author : <?php echo $result['author'] ?></h6><br>
                                <h6 style="text-align: left;color:white">Uploaded date : <?php echo $result['req_date'] ?></h6><br>
                                <form action="mail.php" method="post">
                <input type="hidden" name="title" value="<?php echo $result['title'] ?>">
            <input type="hidden" name="author" value="<?php echo $result['author'] ?>">
            <button type="submit" name="donate" style="background-color: green; width: 100px; height: 30px; color: white; font-weight: bold"><h5>DONATE</h5></button>
    </form><br></td></tr>
                              
                           
                               <!--
							   <button type="submit" name="del" action="delete.php" id ="del"></button>
                            -->
                          
<?php  

}  
}else{
?>
<h1 style="color:white; font-weight: bolder"></h1><br><h6 style="color: white;">No Requests Found!</h6><br><br>


</div>

<?php
}	
    }	
					  
?> </li>
</table>
						
</li></ul></li>
                        </div>
                        							
                        </ul>
                       
                        
                            

                                
                           
                    </nav>

                </div>

            </div>
            
        </div>
    </header>
    <!-- Header Section End -->

<br><br><br><br>
    <?php
    // Query the database to retrieve user information from the 'manybook' table
    $query = "SELECT name, email, phno FROM tbl_registration WHERE user_id = $user_id";
    $result = $conn->query($query);

    // Check if the query was successful
    if ($result) {
        // Fetch the user data
        $userData = $result->fetch_assoc();
        ?>
    <div class="box1" style="margine-top: 100px;
    background: transparent; opacity:7;
	backdrop-filter: blur(10px);
	box-shadow: 10px 10px 10px 10px rgba(0.5, 0.5, 0.5, 0.5);
    border-radius: 10px;">
        <div class="update" >
            <form>
<div style="height:auto; width: 100%; text-align: center">
                <img src ="./images/p.jpg" style="border-radius: 50%;opacity:100%; width:100px; height: 100px"><h3 style="color:black;"><?php echo "Hello, " . $userData['name'] . ""?></h3><br>
                <form name="form"  onsubmit="return isvalid()" method="POST" style="text-align: center;" hidden>
                  
                </form>
                <form name="email" action ="update_mail.php" onsubmit="return isvalid()" method="POST" style="text-align: center;">
                    
                        <input type="text" id="email" name="email" action = "Update_mail.php" placeholder="Email Address" value="<?php echo "" . $userData['email'] . ""?>" style="width: 80%; height: 40px; color: black;border: 0; border-radius: 10px;">
                        <input type="submit" id="btn" value="UPDATE" name = "submit" style="color: black; font-weight: bolder; width: auto; height: auto;border: 0; border-radius: 10px;"><br><br>
                    
                </form>
                <form name="email" action ="update_phone.php" onsubmit="return isvalid()" method="POST" style="text-align: center;"> 
                    
                        <input type="text" id="phno" name="phno" action = "Update_phone.php" placeholder="Phone Number" value="<?php echo "" . $userData['phno'] . ""?>" style="width: 80%; height: 40px;color: black;border: 0; border-radius: 10px;" >
                        <input type="submit" id="btn" value="UPDATE" name = "submit" style="color: black; font-weight: bolder; width: auto; height: auto;border: 0; border-radius: 10px;"><br><br>
                    
                
                
            </form>
        </div>
    </div>
    </div>



    <div>
   <?php

        // Display user information
        //echo "Name: " . $userData['name'] . "<br>";
        //echo "Email: " . $userData['email'] . "<br>";
        //echo "Phone Number: " . $userData['phno'] . "<br>";

        // Close the database connection
        $conn->close();
    } else {
        echo "Error retrieving user information: " . $conn->error;
    }
?>
    </div>
     <!-- Js Plugins -->
     <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>