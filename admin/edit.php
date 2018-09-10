<?php
$Name=$_REQUEST['txtPname'];
if(isset($_REQUEST['sizeselect']))
{
$size=$_REQUEST['sizeselect'];
}
else
{
$size="Not Defined";
}
$dir="";
$price=$_REQUEST['txtPrice'];
$model=$_REQUEST['txtModel'];
$color=$_REQUEST['txtColor'];
$description=$_REQUEST['txtDes'];
$stock=$_REQUEST['stk'];
require_once('connect.php');
//Connect to MYSQL Server
$con=mysqli_connect($servername,$user,$pass,$databaseName) or die("Could not connect to server");

if(isset($_REQUEST['category']) &&isset($_REQUEST['subcat']) && isset($_FILES['photo']['name']))
{
$filename=$_FILES['photo']['name'];
$tempName=$_FILES['photo']['tmp_name'];
$fileSize=$_FILES['photo']['size'];
$Category=$_REQUEST['category'];
$SubCategory=$_REQUEST['subcat'];


if($Category=="Electronics" && $SubCategory=="Mobiles")
{
	$dir="../pics/".$Category."/".$SubCategory."/";
	}
else if($Category=="Electronics" && $SubCategory=="Computers and Accesories")
{
$dir="../pics/".$Category."/".$SubCategory."/";
}
else if($Category=="Electronics" && $SubCategory=="Home Appliances")
{
$dir="../pics/".$Category."/".$SubCategory."/";
}
else if($Category=="FashionWear" && $SubCategory=="Mens")
{
$dir="../pics/".$Category."/".$SubCategory."/";
}
else if($Category=="FashionWear" && $SubCategory=="Women")
{
$dir="../pics/".$Category."/".$SubCategory."/";
}
else if($Category=="Toys" && $SubCategory=="Boy Toys")
{
$dir="../pics/".$Category."/".$SubCategory."/";
}else if($Category=="Toys" && $SubCategory=="Girl Toys")
{
$dir="../pics/".$Category."/".$SubCategory."/";
}

//Create Query for operation on database table

if(move_uploaded_file($tempName,$dir.$filename))
{
	$p=$dir.$filename;
	$query="update products set Name='$Name',Category='$Category',SubCategory='$SubCategory',Price=$price,Model='$model',Color='$color',Description='$description',Size='$size',Pictures='$p',Stock=$stock where Id=".$_GET['id'];
	//Execute Query
$res=mysqli_query($con,$query) or die(mysqli_error($con));
if($res)
{
	echo"<script>alert('Product Details updated successfully');window.location='viewproduct.php';</script>";
}
else{
	echo"<script>alert('Error in updating product details 1');window.location='viewproduct.php';</script>";
}
}
else{
	echo"<script>alert('Error in saving product details');window.location='viewproduct.php';</script>";
}
}
else{
	$query="update products set Name='$Name',Price=$price,Model='$model',Color='$color',Description='$description',Stock=$stock where Id=".$_GET['id'];
	//Execute Query
$res=mysqli_query($con,$query) or die(mysqli_error($con));
if($res)
{
	echo"<script>alert('Product Details updated successfully');window.location='saveproduct.php';</script>";
}
else{
	echo"<script>alert('Error in updating product details 1');window.location='saveproduct.php';</script>";
}

}
	
?>
	

	