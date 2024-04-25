<?php 
	require 'connection.php';
	$id=$_GET['id'];
	$query=mysqli_query($connect,"DELETE FROM admin WHERE id_admin=$id");
	header("location:acount.php");
?>