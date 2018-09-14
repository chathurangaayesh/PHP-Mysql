<?php 
include 'connection.php';
$password=md5('1234');
$sql="INSERT INTO user (username,password,email,role) VALUES ('admin','{$password}','admin@dcs.com','administrator')";
if(mysqli_query($conn,$sql)){
	echo 'add';

} else {
	echo mysqli_error($conn);
}


 ?>