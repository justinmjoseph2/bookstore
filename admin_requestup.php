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
   <!-- Humberger End -->

   <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="admin.php"><img src="img/lo.png" style="height: 50px;width: 120px;padding-left: 50px;" alt=""></a>
                        
                    </div>
                </div>
                   <div class="col-lg-6" style="width:700px">
                    <nav class="header__menu" style="width:700px">
                        <ul>
                        
                            <div class="hero__search__phone" style="padding-right: 30px;padding-top: 20px;">
                            <div class="hero__search__phone__icon">
                                <li><i class="fa fa-user">
                                <ul class="header__menu__dropdown">
                                    <li><a href="logout.php">Logout</a></li>
                                </ul></i></li>
                                
                                
                            </div>
                            <div class="hero__search__phone__text">
        
                            </div>
                        </div>
                        <li  style="padding-right: 30px;padding-top: 20px;"><a href="admin.php">Home</a></li>
        
                        <li class="active" style="padding-right: 30px;padding-top: 20px;"><a href="add.html">ADD BOOK</a></li>
                            <li style="padding-right: 30px;padding-top: 20px;"><a href="admin_requests.php">Requests</a>
                            </li>
                        </ul>
                    </nav>
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
  <form method="POST" action="mail1..php" enctype="multipart/form-data">
  
  <div class="input-group">
    
  </div>
    <div>
        <input type="text" style="width: 100%;" name="title" placeholder="Title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : ''; ?>" required>
    </div>
    <div class="input-group">
        <input type="text" style="width: 100%;" name="author" placeholder="Author" value="<?php echo isset($_POST['author']) ? $_POST['author'] : ''; ?>" required>
    </div>
      <div class="input-group">
  	  <input type="text" style="width: 100%;" name="genre" placeholder="Genre" required>
  	</div>
      
    <div class="input-group">
      <label for="publ_date">Publication Date</label>
      <input type="date" style="width: 100%;" name="publ_date" required>
    </div>
      
    <!--
	<div class="input-group">
	<label>Genre</label>
<marquee>Vegitables, Fruits, Dried Fruits, Fish, Meat, Egg, FErtilizers, Equipments, Others</marquee>
<input type="text" name="category" id="category"required>
-->


    <div class="input-group">
  	  <textarea style="height: 300px; width: 100%;" name="description" placeholder="description" required></textarea>
  	</div>

	<div class="input-group">
  	  <label for="pdf">Upload PDF</label>
  	  <input type="file" style="width: 100%;" name="pdf" accept=".pdf" required>
    </div>
    <div class="input-group">
  	  <label for="img_cover">Upload Cover Image</label>
  	  <input type="file" style="width: 100%;" name="img_cover" accept=".jpg" required>
    </div>
<!-- 	
      <div class="input-group">
  	  <label for="img">Upload Cover Image</label>
  	  <input type="file" name="img" accept=".jpg" required>
  	</div>
-->
  	  <input type="submit" class="site-btn" name="submit" value="Upload Book">
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