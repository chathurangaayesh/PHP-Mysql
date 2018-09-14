<?php
 include 'connection.php';


// if(isset($_GET['user_id'])){
 	$user=$_GET['username'];
	if ($user =='admin') {
		header('location:useroperations.php?massage=Cannot Delete admin');

	}
	else {
 	 $user_id = $_GET['user_id'];
	
 	$sql="DELETE FROM User WHERE user_id={$user_id} LIMIT 1";
	$result_set=mysqli_query($conn,$sql);
 	if($result_set){
	header('location:useroperations.php?massage=Delete user');
	}
	else {
		echo "error". $conn->error;
		}


}

?>
