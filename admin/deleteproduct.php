<?php
require_once('connect.php');
//Connect to MYSQL Server
$con=mysqli_connect($servername,$user,$pass,$databaseName) or die("Could not connect to server");
//Create Query for operation on database table
$query="Delete from products where Id=".$_GET['id'];
$res=mysqli_query($con,$query) or die(mysqli_error($con));
if($res)
{
	echo"<script>alert('Product Deleted successfully');window.location='viewproduct.php';</script>";
}
else{
	echo"<script>alert('Error in updating product details 1');window.location='viewproduct.php';</script>";
}
	?>