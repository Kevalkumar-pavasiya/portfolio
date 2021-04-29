<?php

	include('includes/config.php');
	
	$id = $_GET['id'];

	$sql = " DELETE FROM `recorder` WHERE id = $id ";

	mysqli_query($con, $sql);

	header('location:manage-ro.php');
?>