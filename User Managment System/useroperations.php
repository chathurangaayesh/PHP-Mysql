<?php
 include 'connection.php';

 
 if(isset($_GET['massage'])) {
 	echo "<div class='errorms'>";
 	echo $_GET['massage'];
 	echo "</div >";
 }

 //
//user add
if(isset($_POST['submit'])){
		$user_name = mysqli_real_escape_string($conn,$_POST['user_name']);
		$password = mysqli_real_escape_string($conn,$_POST['user_password']);
		$email = mysqli_real_escape_string($conn,$_POST['user_email']);
		$hashed_password = md5($password);

		$query = "INSERT INTO User (username,password,email,role) VALUES ('{$user_name}','{$hashed_password}','{$email}','user')";

		$result_set = mysqli_query($conn,$query);

		if($result_set){
			echo "User Added";
		}else{
			echo "Error!";		
		}
	}
 //user table
$sql="SELECT * FROM User";

$result_set=mysqli_query($conn,$sql);
if($result_set){
	echo "<table id='user_table'>";
	echo "<tr>";
	echo "<th>User Name</th>";
	echo "<th>Email</th>";
	echo "<th>Delete</th></tr>";
	while($result=mysqli_fetch_assoc($result_set)){
		echo "<tr><td>".$result['username']."</td>";
		echo "<td>".$result['email']."</td>";
		$user_id = $result['user_id'];
		$username=$result['username'];
		echo "<td><a href=\"delete_user.php?user_id={$user_id}&username={$username}\">Delete</a></td>";
		echo "</tr>";
		}
		echo "</table>";	
	}


?>


<html>
<head>
	<style>
	body{
		margin: 50px auto 0px;
		width: 50%;
	}
		.errorms {
			color: red;
			border-radius: 5px;
			border:2px  solid red;
			background-color: pink;
			padding: 5px;
			width: 200px;
			margin: 50px auto 0px;
			text-align: center;
			margin-bottom: 2px;
		}
		table{
			border-collapse:collapse;
			margin-bottom:20px;
		}
		#user_table td,th {
			border:1px solid black;
			padding:10px;
		}
		#user_table tuseroperations.phph {
			border:1px solid black;
			padding:10px;
		}
		fieldset {
			width: 50%;
		}
	</style>
</head>
<body>
	<fieldset >
		<form action="useroperations.php" method="POST">
			<table>
				<tr>
					<td><p>User Name:</p></td>
					<td><input type="text" name="user_name"></td>		
				</tr>
				<tr>
					<td><p>Password:</p></td>
					<td><input type="password" name="user_password"></td>		
				</tr>
				<tr>
					<td><p>Email:</p></td>
					<td><input type="email" name="user_email"></td>		
				</tr>
				<tr>
					<td><input type="submit" value="Add" name="submit"></td>
					<td><input type="reset" value="Clear"></td>		
				</tr>
			</table>	
		</form>
	</fieldset>
</body>
</html>
