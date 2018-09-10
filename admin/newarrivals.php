<!DOCTYPE html>
<head>
<title>CHANGE STATUS</title>
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
$query="select Id,Name from products";
$res=mysqli_query($con,$query) or die(mysqli_error($con));
?>
<form method="post" action="newarrival.php" >
<table>
<tr>
<td>Select Product<select name="prod"><option>SELECT PRODUCT</option>
<?php
while($products=mysqli_fetch_array($res))
{?>
<option value="<?php echo $products[0];?>"><?php echo $products[1];?></option>
<?php
}
?>
</select>
</td></tr>
<tr>
<td><input type="submit" value="Update status"></td>
</tr>
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