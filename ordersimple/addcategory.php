<!--SENKUBUGE PETER ALLAN 2019-M132-20012-->
<?php
	include('conn.php');

	$cname=$_POST['cname'];

	$sql="insert into category (catname) values ('$cname')";
	$conn->query($sql);

	header('location:category.php');

?>