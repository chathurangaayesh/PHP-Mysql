<?php
 include 'connection.php';


if(isset($_GET['course_id'])){
  $course_id = mysqli_real_escape_string($conn,$_GET['course_id']);
	echo $course_id;
 	$sql="DELETE FROM courses WHERE course_code='{$course_id}'";
	$result_set=mysqli_query($conn,$sql);
 	if($result_set){
	echo "deleled";
	}
	else {
		echo "error". $conn->error;
		}
}



?>
