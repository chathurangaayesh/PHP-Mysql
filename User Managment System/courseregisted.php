<?php 

if(isset($_GET['username'])) {

 $username= $_GET['username'];

 }

$sql="SELECT * FROM student WHERE name='{$username}";
echo "<fieldset >";
$result_set=mysqli_query($conn,$sql);
if($result_set){
	echo "<table id='Courses_table'>";
	echo "<tr>";
	echo "<th>Course id</th>";
	echo "<th>Course Name</th>";
	echo "<th>Credit</th>";
	echo "<th>Registor</th></tr>";
	while($result=mysqli_fetch_assoc($result_set)){
		echo "<tr><td>".$result['course_code']."</td>";
		echo "<td>".$result['course_name']."</td>";
		echo "<td>".$result['credits']."</td>";
		$course_code  = $result['course_code'];
		echo "<td>";
		echo "<a href=\"reg_course.php?course_id={$course_code}&username={$username}\">Register</a>";
	
	
		echo "</td></tr>";
		}
		echo "</table>";	
	}

echo "</fieldset>";

 ?>