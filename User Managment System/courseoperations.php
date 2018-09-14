<?php
 include 'connection.php';
 $table='';
//course table
 if (isset($_POST['add'])) {
 
$sql="SELECT * FROM Courses ";
echo "<fieldset >";
$result_set=mysqli_query($conn,$sql);
if($result_set){
	echo "<table id='Courses_table'>";
	echo "<tr>";
	echo "<td>Course Name</td>";
	echo "<td>Credit</td>";
	echo "<td>Delete</td></tr>";
	while($result=mysqli_fetch_assoc($result_set)){
		echo "<tr><td>".$result['course_name']."</td>";
		echo "<td>".$result['credits']."</td>";
		$course_code  = $result['course_code'];
		echo "<td>";
		echo "<a href=\"delete_course.php?course_id={$course_code}\">Delete</a>";
	
	
		echo "</td></tr>";
		}
		echo "</table>";	
	}

echo "</fieldset>";


//insert couser tabale



	$course_code=mysqli_real_escape_string($conn,$_POST['course_code']);
	$course_name=mysqli_real_escape_string($conn,$_POST['course_name']);
	$credits=mysqli_real_escape_string($conn,$_POST['credits']);
	$sql2="INSERT INTO courses (course_code,course_name,credits) VALUES ('{$course_code}','{$course_name}','{$credits}')";
if(mysqli_query($conn,$sql2)){
	echo 'new couesr Added';

} else {
	echo mysqli_error($conn);
}
}
?>


<html>
<head>
	<style>
		
		table{
			border-collapse:collapse;
			margin-bottom:20px;
		}
		#Courses_table td {
			border:1px solid black;
			padding:10px;
		}
		
	</style>
</head>
<body>
	
	<fieldset >
		<form action="courseoperations.php" method="POST">
			<table>
				<tr>
					<td><p>Course Name :</p></td>
					<td><input type="text" name="course_name"></td>		
				</tr>
				<tr>
					<td><p> Course Code:</p></td>
					<td><input type="text" name="course_code"></td>		
				</tr>
				<tr>
					<td>Credits</td>
					<td><input type="text" name="credits"></td>		
				</tr>
				<tr>
					<td><input type="submit" value="Add" name="add"></td>
					<td><input type="reset" value="Clear"></td>		
				</tr>
			</table>	
		</form>
	</fieldset>
</body>
</html>
