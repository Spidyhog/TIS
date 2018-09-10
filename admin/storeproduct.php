<?php
$Name=$_REQUEST['txtPname'];
$Category=$_REQUEST['category'];
$SubCategory=$_REQUEST['subcat'];
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
$filename=$_FILES['photo']['name'];
$tempName=$_FILES['photo']['tmp_name'];
$fileSize=$_FILES['photo']['size'];
$stock=$_REQUEST['stk'];
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

require_once('connect.php');
//Connect to MYSQL Server
$con=mysqli_connect($servername,$user,$pass,$databaseName) or die("Could not connect to server");
//Create Query for operation on database table

if(move_uploaded_file($tempName,$dir.$filename))
{
	$p=$dir.$filename;
	$query="insert into products(Category,SubCategory,Price,Model,Color,Description,Pictures,Name,Size,Stock) values('$Category','$SubCategory',$price,'$model','$color','$description','$p','$Name','$size',$stock)";
	//Execute Query
$res=mysqli_query($con,$query) or die(mysqli_error($con));
if($res)
{
	echo"<script>alert('Product Details saved successfully');window.location='saveproduct.php';</script>";
}
else{
	echo"<script>alert('Error in saving product details 1');window.location='saveproduct.php';</script>";
}
}
else{
	echo"<script>alert('Error in saving product details');window.location='saveproduct.php';</script>";
}
?>
	

	