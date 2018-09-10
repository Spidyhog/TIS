<!DOCTYPE html>
<head>
<title>My Website</title>
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
<nav class="b">
<a class="s flip" href="Register.php"> Register </a>
<a class="s flip" href="signin.php"> Sign In </a>
</nav>
<nav class="r">
<a class="t flip" href="index.php"> Home</a>
<a class="t flip" href="aboutus.html">About Us</a>
<a class="t flip" href="#">Services</a>
<a class="t flip" href="#">Products</a>
<a class="t flip" href="#">Contact Us</a>
</nav>
<section class="main">
<div class="banner"><img src="images/bnr.jpg" width="100%" height="200"/></div>
<section class="column">
<p class="r"><b><i><u>New Arrivals</u></i></b></p>
<?php 
require_once('connect.php');
//Connect to MYSQL Server
$con=mysqli_connect($servername,$username,$passwword,$databaseName) or die("Could not connect to server");
//Create Query for operation on database table
$query="select distinct category,subcategory, ImagePath from newarrivals LIMIT 3";

//Execute Query
$res=mysqli_query($con,$query) or die('Error in fetching records'.mysqli_error($con));
while($newarr=mysqli_fetch_array($res))
{
?>
<div><a href="viewproducts.php?subcat=<?php echo $newarr[1];?>"><img src="<?php echo $newarr[2];?>" width="300px" height="400px"/></a>
<p><span class="text"><a href="viewproducts.php?subcat=<?php echo $newarr[1];?>"><?php echo $newarr[1];?></a></span></p></div>
<?php
}
?>
</section>
<section  class="column"> 
 <p>We provide latest fashion for all. We provide latest fashion for all. We provide latest fashion for all. We provide latest fashion for all. We provide latest fashion for all.  We provide latest fashion for all. We provide latest fashion for all. We provide latest fashion for all.</p>
</section>
<section class="column"> 
 <p>We provide latest fashion for all. We provide latest fashion for all. We provide latest fashion for all. We provide latest fashion for all. We provide latest fashion for all.  We provide latest fashion for all. We provide latest fashion for all. We provide latest fashion for all.</p>
<section>
</section>
<footer class="r">
<p>Shop more! Save more! Stay Happy!</p>
</footer>
</body>
</html>
