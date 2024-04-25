<?php 
	require 'connection.php';
	$id=$_GET['id'];
	$query=mysqli_query($connect,"DELETE FROM footer WHERE id_footer=$id");
	header("location:footer.php");
?>