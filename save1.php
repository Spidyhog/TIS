<?php
$u=$_REQUEST['username'];
$p=$_REQUEST['password'];
require_once('connect.php');
//Connect to MYSQL Server
$con=mysqli_connect($servername,$username,$passwword,$databaseName) or die("Could not connect to server");
//Create Query for operation on database table
$query="Select Username,Password from usercredential where Username='$u'";

//Execute Query
$res=mysqli_query($con,$query) or die('Error in fetching records');

$row=mysqli_fetch_array($res);
if($row[1]==$p)
{
	session_start();
	$_SESSION['username']=$u;
	header('Location:index1.php');
}
else
{
	echo"<script>alert('Username or Password Incorrect');window.location='signin.php';</script>";
}
?>
