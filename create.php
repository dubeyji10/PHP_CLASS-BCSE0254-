<?php

include 'a1.php';
// $query1 = "";
if(isset($_POST['insert'])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$name_im = $_FILES['file']['name'];
$target_dir = "/opt/lampp/temp/testupload/" ;
$target_file = $target_dir . basename($_FILES["file"]["name"]);
// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
move_uploaded_file($_FILES['file']['tmp_name'],"/opt/lampp/temp/testupload/" .$name_im);
// move_uploaded_file($_FILES["file"]["tmp_name"],  $_FILES["file"]["name"]);


$sql = "INSERT INTO ques1 (name,email,phone,image)
	 VALUES ('$name','$email','$phone','$image')";
if(mysqli_query($conn, $sql)){
    mysqli_close($db);
    echo "<script>alert('Record has been added')</script>";
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
