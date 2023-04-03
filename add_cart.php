<?php
session_start();
?>
 <?php
include('connection.php');
if(isset($_GET['name']))
	{
		$_SESSION['cart'][]=array("name"=>$_GET['name'], "price"=>$_GET['price'], "img"=>$_GET['img'], "qty"=>1);
	} 
$id=$_GET['id'];
$select="select * from products";
$res=mysqli_query($conn,$select);
// var_dump($res);
header('location:view_cart.php');
?>