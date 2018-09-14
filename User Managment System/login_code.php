<?php
include 'connection.php';

extract($_POST);
 $username=mysqli_real_escape_string($conn,$_POST['username']);
 $password=mysqli_real_escape_string($conn,$_POST['password']);
$hased_password=md5($password);


if(isset($_POST['submit'])){
$sql = "SELECT 	username,role FROM User WHERE username='{$username}' AND password='{$hased_password}'";
$result = mysqli_query($conn,$sql);

 // mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0)
	{
		$row=mysqli_fetch_assoc($result);

	if($row['role']=="administrator")
		{
		header("Location:admin_panel.php"); 
		}
	else
		{
		header("Location:student.php?username={$username}");
		}
	}
else {
		header('location:login.php?error=Invalide Username or Password');
	}

}	

mysqli_close($conn);

?>
