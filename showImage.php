<!DOCTYPE html>
<head>
<title>Display Image</title>
</head>
<body>
<?php
$name=$_REQUEST['imageName'];
$Name=$_REQUEST['fullName'];
$phoneNo=$_REQUEST['phone'];
?>
<img src="documents/<?php echo $name;?>"width="200" height="200"/>
<p>FULL NAME::<b><?php echo $Name;?></b></p>
<p>PHONE NO::<b><?php echo $phoneNo;?></b></p>

</body> 
</html>