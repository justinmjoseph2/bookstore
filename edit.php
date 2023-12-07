<?php
  include "connection.php";
  $id="";
  $title="";
  $author="";
  $genre="";
  

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      ?>
      <script>
      alert("Sucessfully Updated")
      </script>
      <?php
      header("location:admin.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from pdfs where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      ?>
      <script>
      alert("Sucessfully Updated")
      </script>
      <?php
      header("location: admin.php");
      exit;
    }
    $title=$row["title"];
    $author=$row["author"];
    $genre=$row["genre"];


  }
  else{
    $id = $_POST["id"];
    $title=$_POST["title"];
    $author=$_POST["author"];
    $genre=$_POST["genre"];


    $sql = "update pdfs set title='$title', author='$author', genre='$genre' where id='$id'";
    $result = $conn->query($sql);
    ?>
    <script>
    alert("Sucessfully Updated")
    </script>
    <?php
    header("location: admin.php");

    
  }
  
?>
<!DOCTYPE html>
<html>
<head>

 <title>EDIT</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>



 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Book </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label>TITLE: </label>
 <input type="text" name="title" value="<?php echo $title; ?>" class="form-control"> <br>

 <label> AUTHOR: </label>
 <input type="text" name="author" value="<?php echo $author; ?>" class="form-control"> <br>

 <label> GENRE: </label>
 <input type="text" name="genre" value="<?php echo $genre; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="admin.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>