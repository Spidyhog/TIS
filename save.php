<?php
require_once('connect.php');
//Connect to MYSQL Server
$con=mysqli_connect($servername,$username,$passwword,$databaseName) or die("Could not connect to server");
$fname=$_REQUEST['txtFname'];
$lname=$_REQUEST['txtLname'];
$phone=$_REQUEST['txtphone'];
$email=$_REQUEST['txtemail'];
$user=$_REQUEST['txtusername'];
$pass=$_REQUEST['txtpassword'];
$dob=$_REQUEST['txtdob'];
$city=$_REQUEST['txtcity'];
$pin=$_REQUEST['txtpin'];
$state=$_REQUEST['txtstate'];
$add=$_REQUEST['txtadd'];
$fullname=$fname." ".$lname;
//$photo=$_REQUEST['photo'];
//To retrieve information about file uploaded
//PHP Superglobal variables $_FILES is used to get the information about files uploaded on web server.
//name=>to get the uploaded file name
//tmp_name=>to get the temporary file name created by web server
//type=>to get the the type of file uploaded
//error=>To get the error related uploading of file.
//size=>to get the size of file uploaded
$dir="documents/";

$name=$_FILES['photo']['name'];
$tempName=$_FILES['photo']['tmp_name'];
$fileSize=$_FILES['photo']['size'];
//Store uploaded file in server directory
//move_uploaded_file()method is used to save uploaded file on web server.
/*if(move_uploaded_file($tempName,$dir.$name))
{
	header("Location:showImage.php?imageName=".$name."&fullName=".$fullname."&phone=".$phone);
}
else
{
	echo"<script>alert('Your file not uploaded');</script>";
}*/
$query="Insert into userprofile(Username,FirstName,LastName,Address,City,State,PhoneNumber,Email,Password,PinCode,DOB) values('$user','$fname','$lname','$add','$city','$state','$phone','$email','$pass','$pin','$dob')";
$query2="Insert into usercredential(Username,Password,Email,Phone) values('$user','$pass','$email','$phone')";
$res=mysqli_query($con,$query) or die('records already exists');
$res2=mysqli_query($con,$query2) or die('Error in saving records'.mysqli_error($con));
if($res && $res2)
{
	echo"<script>alert('Product Details saved successfully');window.location='register.php';</script>";
}
else{
	echo"<script>alert('Error in saving product details 1');window.location='register.php';</script>";
}
?>
