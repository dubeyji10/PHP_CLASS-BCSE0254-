
<?
include('a1.php');

$name = $_GET['name'];
$sql = "DELETE FROM ques1 WHERE name='$name'";
$query = mysqli_query($conn,$sql);
if($query){
    mysqli_close($db);
    echo "<script>alert('Record has been deleted')</script>";
    header("location:mainpage.php");
}

?>