<!DOCTYPE html>
<head>
<title>admin page</title>
<link href="../css/se.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{?>
Welcome<div><?php echo $_SESSION['username'];?></div><a href="logout.php">Logout</a>
	
<table class="t" cellpadding="20px">
<tr><td>Product Management</td></tr>
<tr><td><a href="saveproduct.php">Add new product</a></td></tr>
<tr><td><a href="viewproduct.php">View Products</a></td></tr>
<tr><td>Order Management</td></tr>
<tr><td><a href="newarrivals.php">Modify Order status</a></td></tr>
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