<?php
	include("connection.php");

	mysqli_select_db($connection,"DCS");

	$query .= "CREATE table User (user_id int(11) AUTO_INCREMENT PRIMARY KEY,username varchar(50),password varchar(100),email varchar(100),role varchar(100));";

	$query .= "CREATE table Courses (course_code varchar(20) PRIMARY KEY,course_name varchar(50),credits int(11));";

	$query .= "CREATE table Student (student_id varchar(50) PRIMARY KEY,name varchar(100),courses varchar(100))";

	if(mysqli_multi_query($connection,$query)){
		echo "Table created succefully.";
	}else{
		echo "Table was not created!";
	}

	mysqli_close($connection);	
?>
