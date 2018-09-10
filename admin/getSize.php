<?php

$categoryName=$_GET['catname'];
//Include Server Connection Parameters in current PHP Script
require_once('connect.php');
//Connect to Database Server(MySQL Server)
$con=mysqli_connect($servername,$user,$pass,$databaseName) or die("Could not connect to server");
//Create Select Query to fetch all categories name from the table
$query="Select size from dimensions where category='$categoryName'";
//Execute the query on MYSQL Server
$result=mysqli_query($con,$query) or die("Could not fetch data.As no records found");
//Fetch the all categories name from category table i.e.  Name and display in HTML  Select 
$s="<select name='sizeselect'>";
while($category=mysqli_fetch_array($result))
{
//Fetching Name from the category table and displaying the name in value attribute of <option> element as well as data in select box
$s=$s."<option value='$category[0]'>$category[0]</option>";
}
echo $s;
?>