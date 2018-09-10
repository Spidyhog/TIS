<!DOCTYPE html>
<head>
<title>View Products</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<?php

session_start();
if(isset($_SESSION['username']))
{?>
Welcome<div><?php echo $_SESSION['username'];?></div><a href="logout.php">Logout</a>
<?php
require_once('connect.php');
//Connect to MYSQL Server
$con=mysqli_connect($servername,$user,$pass,$databaseName) or die("Could not connect to server");
//Create Query for operation on database table
$query="select * from products";

//Execute Query
$res=mysqli_query($con,$query) or die('Error in fetching records');
?>
<table cellpadding="10px" border="2">
<thead>
<th>Product Name</th>
<th>Model</th>
<th>Category</th>
<th>Sub-Category</th>
<th>Description</th>
<th>Price</th>
<th>Color</th>
<th>Product Images</th>
<th>Current Stock</th>
<th>Edit Product</th>
<th>Delete Product</th>
</thead>
<tbody>
<?php
while($product=mysqli_fetch_array($res))
{
	?>
	<tr><td class="transform"><?php echo $product[8];?></td><td class="transform"><?php echo $product[4];?></td><td class="transform"><?php echo $product[1];?></td>
	<td class="transform"><?php echo $product[2];?></td><td><?php echo $product[6];?></td><td>₹<?php echo $product[3];?></td><td><?php echo $product[5];?></td><td><img src="<?php echo $product[7];?>" width="100" height="100"/></td>
	<td class="transform"><?php echo $product[10];?></td>
	<td><a href="editproduct.php?id=<?php echo $product[0];?>">Edit</a></td><td><a href="deleteproduct.php?id=<?php echo $product[0];?>">Remove</a></td></tr>
	<?php
}
?>
</table>
<?php
}
else
{
	
	echo"<script>alert('Not Authorized.Login or Contact Site Administrator');window.location='index.html';</script>";
}
?>

	

</body>
</html>