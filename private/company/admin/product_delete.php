<?php 
	require 'connection.php';
	$id=$_GET['id'];
	$query=mysqli_query($connect,"DELETE FROM product WHERE id_product=$id");
	header("location:product.php");
?>