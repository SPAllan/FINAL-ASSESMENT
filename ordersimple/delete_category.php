<!--SENKUBUGE PETER ALLAN 2019-M132-20012-->
<?php
	include('conn.php');

	$id = $_GET['category'];

	$sql="delete from category where categoryid='$id'";
	$conn->query($sql);

	header('location:category.php');
?>