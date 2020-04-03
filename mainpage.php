


<?php

include 'create.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
<H1>    <center>  ASSIGNMENT - 1 </center>  </H1>

  
  </div>
  <!-- <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-primary" type="submit">Search</button>
    </form> -->


<div class="container">
<div class ="row justify-content-center">
<div class="col-md-10"><br><br><br><br><br><br>
</div>
</div>
<div class="row">
<div class="col-md-4">
<h3 class="text-center text-dark"><font color="#00d9ff"> Add Record </font></h3>
<form action="create.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter NAME" required>


</div>
<div class="form-group">
<input type="text" name="email" class="form-control" placeholder="Enter EMAIL" required>


</div>
<div class="form-group">
<input type="tel" name="phone" class="form-control" placeholder="Enter PHONE NUMBER " required>


</div>
<div class="form-group">
<input type="file" name="file" class="custom-file">

</div>
<div class="form-group">
<input type="submit" name="insert" class="btn btn-primary btn-block" value="insert">

</div>

</form>
</div>
<div class="col-md-8">

<?php
include 'a1.php';
$query1 = "Select * from ques1";
$result = $conn->query($query1); 

?>
 
<h3 class="text-center text-dark"><font color="#00d9ff">  Records in database</font> </h3>

<table class="table table-bordered table-hover table-light" style="width:150%;">
    
        <thead>
            <tr bgcolor="#f2f2f2" style="width:50%;">
              <th><center>#</center></th>
                <th><center>Photo</center></th>
              <th style="width: 40%;"><center>Name</center></th>
              <th><center>Email</center></th>
              <th><center>Phone</center></th>
              <th style="width:100%;"><center>Action</center></th>
            </tr>
        </thead>
          <?php
          $k=1;
          if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {         
            echo "<tr>";
            echo "<td>". $k."</td> ";
           // echo "<td>".$res['image']."</td>";
            $s = $row["image"];
            echo '<td> <image src ="'.$s.'" </td>';
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";  

            echo '<td> <a class = "btn danger btn-primary" href="retrieve.php?name='.$row['name'].'"> DETAILS </a> | '.'<a class = "btn danger btn-primary" href="delete.php?name='.$row['name'].'"> DELETE </a> | '.'<a class = "btn btn btn-primary" href="update.php?name='.$row['name'].'"> UPDATE </a>'.'</td>';        
            // echo '<td><a href="delete.php?name='.$row['name'].'"> DELETE </a> <br> </td>';   

            echo "</tr>"; 
            $k+=1;
            // echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
    }  
        ?>

</table>





</div>
</div>
</div>

    
</body>
</html>

<style>
img{
    height: 120px;
    width: 90px;
}
H1{
    padding-top: 30px;
    padding-bottom: -10px;
}
</style>