<?php
include('a1.php');



$name = $_GET['name'];
$sql = "SELECT * FROM ques1 WHERE name='$name'";
$query = mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $photo = $row['image'];
    

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UPDATE DETAILS </title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">

  
  </div>
  <!-- <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-primary" type="submit">Search</button>
    </form> -->
</nav>

<body>
<br>



<br>

<div class="container">
<div class ="row justify-content-center">
<div class="col-md-10"><br><br><br><br><br><br>
</div>
</div>
<div class="row">
<div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data">
  

<div class="form-group">

NAME :  
        <?php echo '<input type="text" class="form-control" value="'.$name.'" placeholder="'.$name.'" name = "name2">';?> 
        </div>

<div class="form-group">
PHONE :  <?php echo '<input type="text" class="form-control" value="'.$phone.'" placeholder="'.$phone.'" name = "phone2">';?> 
</div>


<div class="form-group">
EMAIL :  <?php echo '<input type="text"  class="form-control" value="'.$email.'" placeholder="'.$email.'" name = "email2">';?> 

</div>

<br>
<br>
<br>

<?php echo'<img class="img" src="'.$photo.'">'?>
change photo  :
<?php echo '<input type="file" name = "name2">';?> 
<div>
<center>
    <input type="submit" name="update" class="btn btn-primary btn-block" value="update">
</center>
</div>
<br>

</form>
</body>


</html>

<?php


if(isset($_POST['update'])){

$name2 = $_POST['name2'];
$phone2 = $_POST['phone2'];
$email2 = $_POST['email2'];


$sql ="UPDATE ques1 SET name = '$name2',phone='$phone2',email='$email2' WHERE name='".$name."'";
if(mysqli_query($conn, $sql)){
   echo "<script>alert('Record has been UPDATED ')</script>";
   header("location:mainpage.php");
}	 
   //  if (mysqli_query($conn, $sql)) {
   // 	echo "New record created successfully !";
   // 	// header('location:index.php');
   // echo '<a href ="mainpage.php"> HOME </a>';
   //  }
    else {
       echo "Error: " . $sql . "
" . mysqli_error($conn);
    }



}



?>
