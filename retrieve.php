<?php
include 'a1.php';



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
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP assignment</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">

  
  </div>

</nav>

<head> <font size ="30px" color = "#00a6ff">RETRIEVE </font></head>


<body>
    <center>
        <a href="mainpage.php" target="_blank"> HOME  </a>
    </center>

    <table class = "table-light" border="0.2px solid black" style="width:60%;">

        <thead>
            <tr bgcolor="#f2f2f2">
           
                <th style="width:30%;">image</th>
              <th>name</th>
              <th>Email</th>
              <th>Phone</th>
            </tr>
          </thead>
          <?php
         

                   
            echo "<tr>";
           // echo "<td>".$res['image']."</td>";
            $s = $row["image"];
            echo '<td> <image src ="'.$s.'" </td>';
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";   
            echo "</tr>"; 
            // echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
      
     
        ?>

    </table>



</body>

</html>
<!--    

            echo'<td><img src="data:image/jpeg;base64,'.base64_encode( $s ).'"/></td>';


-->
<style>
img{
height: 200px;
width: 100px;
}

table{
  padding-left: 40px;
  padding-block-start: 50px;
  padding-top: 50px;
}
h1{
  font-size: 10em;
  color:black;
}
</style>