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
}
?>