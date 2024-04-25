<?php 
	require 'connection.php';
	$id=$_GET['id'];
	$query=mysqli_query($connect,"DELETE FROM category WHERE id_category=$id");
	header("location:category.php");
?>