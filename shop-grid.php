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
    <title>Shop</title>

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
                            <li class="active" style="padding-right: 100px;padding-top: 20px;"><a href="./shop-grid.php">Shop</a></li>
                            <li style="padding-right: 100px;padding-top: 20px;"><a href="./request1.php">Request</a></li>	
                            <li style="padding-right: 50px;padding-top: 20px;"><a href="./contact.php">Contact</a></li>	

                            <div class="hero__search__phone">


                            
                                	<li><i class="fa fa-user" style="padding-right:20px;padding-top: 20px;">
								<ul class="header__menu__dropdown">
                                    <li><a href="update_password.php">Update Password</a></li>
									<li><a href="account_details.php">Update Details</a></li>
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


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/bac.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <div style=" background-image: url('./images/addbg.jpg') ; ">
                        <h2>CATAGORYS</h2>
                        <div class="breadcrumb__option">
                            <a href="shop-grid.php">Home</a>
                            <span>Shop</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
<form method="post" action="search.php">
<input type="text" name="search" placeholder="Search">
<button type="submit" name="submit" class="site-btn">SEARCH</button>	
</form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
	
    <section class="product spad">
        <div class="container">
                <div class="col-lg-20 col-md-15">
                    <div class="filter__item">
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"> <img src="img/categories/cat-1.png" alt="3D HTML" width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="romance.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="romance.php">Romance</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/cat-2.png" width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="action_adv.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="action_adv.php">Action & Adventure</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/cat-3.png"width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="mist_thrill.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="mist_thrill.php">Mistery & Thriller</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/cat-4.png"width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="bio_hist.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="bio_hist.php">Biographys & History</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/cat-5.png" width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="children.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="children.php">Childrens</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/ic-1.png" width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="youngad.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="youngad.php">Young Adults</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/ic-2.png" width="350" height="350">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="fantasy.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="fantasy.php">Fantasy</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/ic-3.png" width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="hist_fic.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="hist_fic.php">Historical Fiction</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/ic-4.png" width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="horror.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="horror.php">Horror</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/ic-5.png" width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="lit_fic.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="lit_fic.php">Literary Fiction</a></h6>
                                </div>
                            </div>
                        </div> <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/ic-6.png" width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="non_fic.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="non_fic.php">Non-Fiction</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/ic-7.png" width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="science_fic.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="science_fic.php">Science-Fiction</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"><img src="img/categories/ic-8.png" width="350" height="350">
                                    <ul class="product__item__pic__hover">

                                        <li><a href="oth.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="oth.php">Other</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section End -->

    <!-- Footer Section Begin -->

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