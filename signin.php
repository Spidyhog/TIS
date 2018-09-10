<!DOCTYPE html>
<head>
<title>Sign In</title>
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
<header class="header">
<img src="images/ico.jpg" height="5%" width="5%" class="i"/>
The Indian Store
</header>
<nav class="r">
<a class="t" href="index1.php"> Home</a>
<a class="t" href="aboutus.html">About Us</a>
<a class="t" href="#">Services</a>
<a class="t" href="#">Products</a>
<a class="t" href="#">Contact Us</a>
</nav>
<body>
<form action="save1.php" method="post">
<table cellpadding="10" class="table">
<tr>
<th>Username: <input type="text" placeholder="Enter Username" name="username" required class="it" /></th>
<th>Password: <input type="password"  placeholder="Enter Password" name="password" required class="it" /></th>
</tr>
<tr>
<th><input type="submit" value="Sign In" class="it" /></th>
<th><input type="reset" value="Clear" class="it" /></th>
</tr>
<nav>
<tr><td><a href="Register.php" id="o">New user <b>Register here!</b></a></td></tr>
</nav>
</table>
</form>
</body>
</html>