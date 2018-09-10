<!DOCTYPE html>
<head>
<title>edit product</title>
<script type="text/javascript" src="../scripts/getSubcat.js"></script>
<script type="text/javascript" src="../scripts/getSize.js"></script>
</head>
<body>
<?php

session_start();
if(isset($_SESSION['username']))
{?>
Welcome<div><?php echo $_SESSION['username'];?></div><a href="logout.php">Logout</a>
<p style='color:red;font-size:20px;font-weight:bold'>Note:Select Category and Subcategory to update product image</p>
<form method="post" action="edit.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">
<?php
require_once('connect.php');
//Connect to Database Server(MySQL Server)
$con=mysqli_connect($servername,$user,$pass,$databaseName) or die("Could not connect to server");

$productID=$_GET['id'];
$query1="select Name,Price,Model,Color,Description,Pictures,Stock from products where Id=$productID";
$result2=mysqli_query($con,$query1) or die("Could not fetch data.As no records found");
$record=mysqli_fetch_array($result2);

?>
<table cellpadding="10px">
<tr>
<td>Product Name </td><td> <input type="text" value="<?php echo $record[0];?>" placeholder="Product Name" name="txtPname"/></td></tr>
<tr>
<td>Category</td><td>Sub-Category</td><td>Size:</td></tr>
<tr><td>
<select name="category" id="cat" onchange="showSubCategory();showSize();">
<option value="Unknown">Select Category</option>
<?php
//Include Server Connection Parameters in current PHP Script

//Create Select Query to fetch all categories name from the table
$query="Select name from category";
//Execute the query on MYSQL Server
$result=mysqli_query($con,$query) or die("Could not fetch data.As no records found");
//Fetch the all categories name from category table i.e.  Name and display in HTML  Select 
while($category=mysqli_fetch_array($result))
{
//Fetching Name from the category table and displaying the name in value attribute of <option> element as well as data in select box
?>
<option value="<?php echo $category[0];?>"><?php echo $category[0];?></option>
<?php
}
?>
</select>
</td><td id="subcat"></td>
<td id="size"></td></tr>	
<tr><td>Price:</td><td><input type="text" value="<?php echo $record[1];?>" placeholder="Enter Price" name="txtPrice"/></td></tr>	
<tr><td>Model:</td><td><input type="text" value="<?php echo $record[2];?>" placeholder="Model Number" name="txtModel"/></td></tr>	
<tr><td>Color:</td><td><input type="text" value="<?php echo $record[3];?>" placeholder="Enter Color Name" name="txtColor"/></td></tr>	
<tr><td>Description:</td><td><textArea rows="5" cols="20" name="txtDes"><?php echo $record[4];?></textArea></td></tr>
<tr><td>Current Stock:</td><td>	<input type="number" value="<?php echo $record[6];?>" placeholder="Enter Stock" name="Stk"/></td></tr>
<tr><td>Pictures</td><td><input type="file"  name="photo"/></td></tr>
<tr><td><input type="submit" value="Edit Product"></td></tr>	
</table>
</form>
<?php
}
else
{
	
	echo"<script>alert('Not Authorized.Login or Contact Site Administrator');window.location='index.html';</script>";
}
?>
</body>
</html>