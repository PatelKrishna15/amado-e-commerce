<?php
session_start();
include('include.php');
include('connection.php');
?>
<?php
$id=$_GET['id'];
$delete="DELETE from products where id='$id'";
$res=mysqli_query($conn,$delete);
if($res){
	echo "<script>alert('Product Deleted Successfully');location.href='products.php';</script>";
}
?>