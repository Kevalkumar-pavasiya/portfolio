<?php

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM vides WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: videoview11.php"); 
?>