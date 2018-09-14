<?php
	include("connection.php");

	$query = "CREATE database DCS";
	$result = mysqli_query($connection,$query);
	if($result){
		echo "Database Created Successfully";
	}else{
		echo "Database Creation Failed !";
	}
?>
