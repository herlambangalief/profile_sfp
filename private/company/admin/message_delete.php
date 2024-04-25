<?php 
	require 'connection.php';
	$id=$_GET['id'];
	$query=mysqli_query($connect,"DELETE FROM message WHERE id_message=$id");
	header("location:message.php");
?>