<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOKS</title>

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
	font-weight: 600;
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
	font size: 20px;
	color: re;
}
img {
  width: 266px;
  height: px;
  object-fit: fill;
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
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  width: 300px;
  text-align: center;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}


	</style>
</head>

<body style="overflow-x: hidden;">
    <!-- Page Preloder -->


    <!-- Header Section Begin -->
    <header class="header">

<div class="container">
<div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="admin.php"><img src="img/lo.png" style="height: 100px;width: 150px;padding-left: 50px;" alt=""></a>
                        
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
</header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
<form method="post" action="search_user.php">
<input type="text" name="search" placeholder="Search">
<button type="submit" name="submit" class="site-btn">SEARCH</button>	
</form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <table>	
	<?php
$conn = mysqli_connect("localhost", "root", "", "manybook");

if (isset($_POST["submit"])) {
    $str = mysqli_real_escape_string($conn, $_POST["search"]);
    $sql = "SELECT * FROM `tbl_registration` WHERE name LIKE '%$str%' OR email LIKE '%$str%' OR phno LIKE '%$str' ORDER BY name ASC";

    $run = mysqli_query($conn, $sql);

    if ($run) { // Check if the query was executed successfully
        ?>
        <div>
        <?php
        $i = 1;
        if ($num = mysqli_num_rows($run) > 0) {
            while ($result = mysqli_fetch_assoc($run)) {
                ?>
                <div class="column" style="padding-left: 50px;">
                    <div class="card">
                        <h4 style="font-weight: bold;"><?php echo $result['name']; ?></h4><br>
                        <h6>Email: <?php echo $result['email']; ?></h6><br>
                        <h6>Phone: <?php echo $result['phno']; ?></h6><br>
                        <h6>Registered On: <?php echo $result['user_up_date']; ?></h6><br>
                        <a href="del_user.php?user_id=<?php echo $result['user_id']; ?>" id="btn">
                            <button type="submit" name="del" id="del" style="background-color: red; width:200px; height:50px; color:white; font-weight:bold">DELETE</button><br><br>
                        </a>
                    </div>
                    <br>
                </div>
                <?php
                $i++;
            }
        } else {
            ?>
            <div style="text-align: center; width: 100%; height: 100%">
                <h1 style="font-size: 24px; color: red; font-weight: bold; text-align: center;">Oops, The user you are searching for is not found!</h1><br>
            </div>
            <?php
        }
        ?>
        </div>
        <?php
    } else {
        // Handle the case where the query was not executed successfully
        echo "Error: " . mysqli_error($conn);
    }
}
?>

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