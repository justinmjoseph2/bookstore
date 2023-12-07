<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" type="text/css" href="rating_style.css">
  <script type="text/javascript">
  
   function change(id)
   {
      var cname=document.getElementById(id).className;
      var ab=document.getElementById(id+"_hidden").value;
      document.getElementById(cname+"rating").innerHTML=ab;

      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="star2.png";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="star1.png";
      }
   }

</script>
    <title>Document</title>
    <style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("images/downback.jpg");
  background-size: 2140px;

}

/* Float four columns side by side */
.column {
  padding: 100px;
  float: left;
  width: 25%;
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
  box-shadow: 10px 10px 10px 10px rgba(0.2, 0.2, 0.2, 0.2); /* this adds the "card" effect */
  padding: 50px;
  text-align: left;
  background: transparent;
  backdrop-filter: blur(50px);
  max-width: 70%;
  text-align: left;
  line-height: 0px;
  border-radius: 25px;
  margin: auto;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
.star-rating {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.star-rating input[type="radio"] {
    display: none;
}

.star-rating label {
    cursor: pointer;
    font-size: 30px;
    padding: 5px;
}

.star-rating label:before {
    content: "\2605"; /* Unicode character for a star */
    display: inline-block;
    margin-right: 5px;
    color: transparent;
}

.star-rating input[type="radio"]:checked ~ label:before {
    color: gold; /* Change the color of the star to gold when checked */
}

</style>
<script>
                function bigImg(x) {
                  x.style.height = "50px";
                  x.style.width = "50px";
                }
                
                function normalImg(x) {
                  x.style.height = "35px";
                  x.style.width = "35px";
                }
                function probigImg(x) {
                  x.style.height = "500px";
                  x.style.width = "500px";
                }
                
                function pronormalImg(x) {
                  x.style.height = "450px";
                  x.style.width = "450px";
                }
                </script>
</head>
<body style="overflow: hhidden;">

  

        

  
    

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);   
 
if (isset($_GET['id'])) {  
     $id = $_GET['id'];  
     $query = "SELECT * FROM `pdfs` WHERE id = '$id'";  
     $run = mysqli_query($conn,$query);  
     if ($run) { 
        while ($result = mysqli_fetch_assoc($run)) {  
            ?> 
                    <br><br><br>

            <div class = "container">
                <div class="card">
        <table style="padding-bottom:50px">

                                
                                    <td>
                                    <div style="padding-right: 100px; padding-left:100px;">
                                    <img src="<?php echo $result['img_path']?>" style=" max-width: 500px; min-width: 300px; max-height: 500px; min-height:300px;"><br>
                                    </div>
                                    </td>	
                                    <td><h1 style="font-weight: bolder;"><?php echo $result['title']?></h1><br>
                                    <h4>Author: <?php echo $result['author'] ?></h4><br>
                                    <h5>Genre:  <?php echo $result['genre'] ?></h5><br> 
                                   
                                    <h6>Publication Date: <?php echo $result['publ_date'] ?></h6><br>
                                    <h6 style="opacity: 50%;">Uploaded on:  <?php echo $result['up_date']?></h6><br>
                                    
                                    <a href="download.php?filename=<?php echo $result['file_path']; ?>" id="btn">
                                    <button type="submit" name ="down" id="down"style="width: 200px;height: 50px;color: black;background-image: linear-gradient(rgb(255, 179, 102), rgb(11, 166, 218));font-weight: bolder;border: 0;font-weight: bolder; box-shadow: 4px 4px 8px rgba(3, 0, 0, 3);">DOWNLOAD</button><br><br>
                                </a>
                                <div style="height:50px"></div>
                                <h6>What do you think about the book?</h6><br>
                                <h6 style="opacity: 50%;">Total Rating: <?php echo $result['rating']?></h6><br>
                                <table>
                                <td><a href="rate1.php?id=<?php echo $id; ?>"><img src="./rating/1.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="height:35px; width:35px;"></a></td>
                                <td><a href="rate2.php?id=<?php echo $id; ?>"><img src="./rating/2.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="height:35px; width:35px;"></a></td>
                                <td><a href="rate3.php?id=<?php echo $id; ?>"><img src="./rating/3.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="height:35px; width:35px;"></a></td>
                                <td><a href="rate4.php?id=<?php echo $id; ?>"><img src="./rating/4.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="height:35px; width:35px;"></a></td>
                                <td><a href="rate5.php?id=<?php echo $id; ?>"><img src="./rating/5.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="height:35px; width:35px;"></a></td>
                                </table>
                                <tr>
                                
 
                                </tr>

                            </td>
                            
                            
                                
                                    <br><br>
                                    
                                        
        </table><br><br><br><br>
<div style="padding-left:100px; padding-right: 100px; heiht:auto"><br>
                                
	
<textarea disabled name="description" id="description" style="width:100%; border: 0; background:transparent;min-height:150px; max-height:auto; max-width:800px; min-width: 800px;" ><?php echo $result['description']?></textarea><br><br>

		<?php
        }
     }else{  
          echo "Error: ".mysqli_error($conn);  
     }  
}  
?> 
<br><br>



</div>

                
              </div> 
              <br><br><br>





</body>
</html>