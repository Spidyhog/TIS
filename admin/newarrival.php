<?php
if(isset($_REQUEST['prod']))
{
$product=$_REQUEST['prod'];
}
else
{
	$product="not defined";
}
$New='N';
require_once('connect.php');
//Connect to MYSQL Server
$con=mysqli_connect($servername,$user,$pass,$databaseName) or die("Could not connect to server");
$query2="select Category,SubCategory,Pictures from products where id=".$_REQUEST['prod'];
$res2=mysqli_query($con,$query2) or die(mysqli_error($con));
$rows=mysqli_fetch_array($res2);
$cat=$rows[0];
$subcat=$rows[1];
$pic=$rows[2];
$query="insert into NewArrivals(Id,Status,Category,SubCategory,ImagePath) values($product,'$New','$cat','$subcat','$pic')";
$res=mysqli_query($con,$query) or die(mysqli_error($con));
if($res)
{
	echo"<script>alert('Product added to new arrivals successfully');window.location='newarrivals.php';</script>";
}
else{
	echo"<script>alert('Error in adding product to new arrival');window.location='newarrivals.php';</script>";
}
	?>