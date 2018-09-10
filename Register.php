<!DOCTYPE html>
<head>
<title>Register</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
<style>
a:hover 
{
color: black;
    background-color: red;
}
</style>
</head>
<body>
<?php
require_once('connect.php');
//Connect to MYSQL Server
$con=mysqli_connect($servername,$username,$passwword,$databaseName) or die("Could not connect to server");
?>
<header class="header">
<img src="images/ico.jpg" height="5%" width="5%" class="i"/>
The Indian Store
</header>
<nav class="r">
<a class="t" href="index.php"> Home</a>
<a class="t" href="aboutus.html">About Us</a>
<a class="t" href="#">Services</a>
<a class="t" href="#">Products</a>
<a class="t" href="#">Contact Us</a>
</nav>
<form  action="save.php" enctype="multipart/form-data" method="post">
<table cellpadding="10">
<tr>
<td>First Name:</td><td><input type="text" placeholder="Enter First Name" name="txtFname" required /></td>
<td>Last Name:</td><td><input type="text" placeholder="Enter Last Name" name="txtLname" required /></td>
</tr>
<tr>
<td>Phone Number:</td><td><input type="number" placeholder="enter phone number" name="txtphone" required /></td>
<td>E-mail:</td><td><input type="email" placeholder="Enter E-mail" name="txtemail" required /></td>
</tr>
<tr>
<td>Username:</td><td><input type="text" placeholder="Enter Username" name="txtusername" required /></td>
<td>Password:</td><td><input type="password"  placeholder="Enter Password" name="txtpassword" required /></td>
</tr>
<tr>
<td>Date of Birth:</td><td><input type="date" placeholder="Enter date of Birth" name="txtdob" required /></td>
<td>Enter City:</td><td><select name="txtcity">
<option>New Delhi</option>
<option>Agra</option>
</select>
</td>
</tr>
<tr>
<td>Enter State:</td><td><select name="txtstate">
<option>Delhi</option>
<option>Uttar Pradesh</option>
</select>
</td>
<td>Enter Pin Code:</td><td><input type="number" name="txtpin">
</td>
<tr>
<td>Enter Address:</td><td><textarea name="txtadd" cols="30" rows="3" required></textarea>
</td>
<td>Upload Photo</td><td><input type="file" value="Upload Photo" name="photo"></td></tr>
<tr>
<td><input type="submit" value="Register" /></td>
<td><input type="reset" value="Clear" /></td>
</tr>
</table>
</form>
</body>
</html>