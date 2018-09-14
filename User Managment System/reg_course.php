<?php
 include 'connection.php';


if(isset($_GET['course_id'] )) {
  $course_id = mysqli_real_escape_string($conn,$_GET['course_id']);
	
 	$sql="SELECT * FROM courses WHERE course_code='{$course_id}' LIMIT 1";
	$result_set=mysqli_query($conn,$sql);
	if ($result_set) {
		$result=mysqli_fetch_assoc($result_set);
		$course_name=$result['course_name'];//course name to reg
	 	//add to student table data
	 		$username=$_GET['username'];

	 		
	 		 	 // $resultU=mysqli_fetch_assoc($result_user);
	 		 	 // echo 
	 		 	$sql3="SELECT * FROM student WHERE courses='{$course_name}' AND name='{$username}' ";
							$resultA=mysqli_query($conn,$sql3);
							$resultU=mysqli_fetch_assoc($resultA);
							 $Count_notRegCourse= mysqli_num_rows($resultA);
	 		 		if($Count_notRegCourse == 0){
	 		 				 $sql1="INSERT INTO  student (name,courses) VALUES ('{$username}','{$course_name}') ";
	 		 	$result_student=mysqli_query($conn,$sql1);
	 		 				if ($result_student) {
	 		 					 header('location:student.php?massage=Registerd course');
	 		 				}
	 		 				
	 		 		}
	 		 		else {
	 		 			header('location:student.php?massage=You are allredy registered');
	 		 		}
	 			}
	
	else {
		echo "query error".mysqli_error($conn);
	}
	
 	}

?>
<html>
<head>
	<title>Registration course/title>
</head>

<body>


</form>
</body>
</html>
