<?php
$username=$_POST['username'];
$password=$_POST['password'];
require_once('connect.php');
//Connect to MYSQL Server
$con=mysqli_connect($servername,$user,$pass,$databaseName) or die("Could not connect to server");
//Create Query for operation on database table
$query="select username,password from admin where username='$username'";

//Execute Query
$res=mysqli_query($con,$query) or die('Error in fetching records');

$row=mysqli_fetch_array($res);
if($row[1]==$password)
{
	session_start();
	$_SESSION['username']=$username;
	header('Location:adminhome.php');
}
else
{
	echo"<script>alert('Username or Passwword Incorrect');window.location='index.html';</script>";
}
?>

