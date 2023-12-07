<?php
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit();
    }

    // Retrieve user information
    $user_id = $_SESSION['user_id'];

    // Use $user_id to fetch additional user data from the database if needed
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Item</title>

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
    <link rel="stylesheet" href="css/style1.css" type="text/css">
</head>

<body style="overflow-x: hidden;">
    <!-- Page Preloder -->


    <!-- Humberger Begin -->

    <!-- Humberger End -->
     <!-- Header Section Begin -->
 
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
                            <li class="active" style="padding-right: 100px;padding-top: 20px;"><a href="./request1.php">Request</a></li>	
                            <li style="padding-right: 50px;padding-top: 20px;"><a href="./contact.php">Contact</a></li>	

                            <div class="hero__search__phone">


                            
	                                	<li><i class="fa fa-user" style="padding-right:20px;padding-top: 20px;">
								<ul class="header__menu__dropdown">
                                    <li><a href="update_password.php">Update Password</a></li>
									<li><a href="account_details.php ">Update Details</a></li>
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
                               <form action="mail.php" method="post">					  
                                <td style="padding-left: 20px;"><h6 style="text-align: left;color:white">Book Title : <?php echo $result['title']?></h6><br>
                                <h6 style="text-align: left;color:white">Author : <?php echo $result['author'] ?></h6><br>
                                <h6 style="text-align: left;color:white">Uploaded date : <?php echo $result['req_date'] ?></h6><br>
                                <input type="hidden" name="req_id" value="<?php echo $result['req_id'] ?>">
            <!-- Add hidden input fields for title and author -->
            <input type="hidden" name="title" value="<?php echo $result['title'] ?>">
            <input type="hidden" name="author" value="<?php echo $result['author'] ?>">
            <button type="submit" name="donate" style="background-color: green; width: 100px; height: 30px; color: white; font-weight: bold"><h5>DONATE</h5></button>
                                
      
    </form><br></td></tr>
                              
                           

                          
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
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="images/addbg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Add Book</h2>
                        <div class="breadcrumb__option">
                            <a href="./shop-grid.php">Home</a>
                            <span>Add</span>
                        </div>  
  </div>
  <form method="POST" action="mail1..php" enctype="multipart/form-data;" style="background: transparent; opacity:7;
	backdrop-filter: blur(10px);
	box-shadow: 10px 10px 10px 10px rgba(0.5, 0.5, 0.5, 0.5);
    border-radius: 10px;">
  
  <div class="input-group">
    
  </div>
    <div>
        <input type="text" style="width: 100%; border: 0; border-radius: 10px; " name="title" placeholder="Title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : ''; ?>" required>
    </div>
    <div class="input-group">
        <input type="text" style="width: 100%; border: 0; border-radius: 10px; " name="author" placeholder="Author" value="<?php echo isset($_POST['author']) ? $_POST['author'] : ''; ?>" required>
    </div>
      <div class="input-group">
  	  <input type="text" style="width: 100%; border: 0; border-radius: 10px; " name="genre" placeholder="Genre" required>
  	</div>
      
    <div class="input-group">
      <label for="publ_date" style="color:white">Publication Date</label>
      <input type="date" style="width: 100%; border: 0; border-radius: 10px; " name="publ_date" required>
    </div>
      
    <!--
	<div class="input-group">
	<label>Genre</label>
<marquee>Vegitables, Fruits, Dried Fruits, Fish, Meat, Egg, FErtilizers, Equipments, Others</marquee>
<input type="text" name="category" id="category"required>
-->


    <div class="input-group">
  	  <textarea style="min-height: 200px; width: 100%; border: 0; border-radius: 10px; " name="description" placeholder="description" required></textarea>
  	</div>

	<div class="input-group">
  	  <label for="pdf" style="color:white">Upload PDF</label>
  	  <input type="file" style="width: 100%; border: 0; border-radius: 10px; " name="pdf" accept=".pdf" required>
    </div>
    <div class="input-group">
  	  <label for="img_cover" style="color:white">Upload Cover Image</label>
  	  <input type="file" style="width: 100%; border: 0; border-radius: 10px; " name="img_cover" accept=".jpg" required>
    </div>
<!-- 	
      <div class="input-group">
  	  <label for="img">Upload Cover Image</label>
  	  <input type="file" name="img" accept=".jpg" required>
  	</div>
-->
  	  <input type="submit" class="site-btn" name="submit" value="Upload Book" style="border-radius: 10px;">
  </form>                            
    </section>
	</div>
                </div>
            </div>
        </div>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
	        <div class="container">
			<div class="row">
			 &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			</div>
        </div>

  
	
    <!-- Categories Section End -->

   

    <!-- Banner Begin -->
    
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved......
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        
                    </div>
                </div>
            </div>
		
    </footer>
    <!-- Footer Section End -->

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