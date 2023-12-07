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
    <title>Contact</title>

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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
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
                            <li class="active" style="padding-right: 50px;padding-top: 20px;"><a href="./contact.php">Contact</a></li>	

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

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text" style="background-image: url(./image/cp.png);">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./shop-grid.php">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+91 9656941692</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>Kanayankavayal P.O, Idukki</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>24 Hours</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>manybook@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
 
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            <form method="POST" action="send.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="mail" id="mail" placeholder="Your Email" required>
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="message" id="message" placeholder="Your message" required></textarea>
                            <button type="submit" name="submit" id="submit" class="site-btn">SEND</button>
                           </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./shop-grid.php"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
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