<?php
require_once('dbconnection.php');
	
	$x = 0;
	if(isset($_POST['submit']))
	{
		$enroll = $_POST['enroll'];

		$sql = "select * from details where enrollment = '$enroll'";
		$re = mysqli_query($con,$sql);
		$num = mysqli_num_rows($re);
		if($num <= 0)
		{
			
			$name = $_POST['name'];
			$age = $_POST['age'];
			$course = $_POST['course'];
			$branch = $_POST['branch'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];
			$sql = "INSERT INTO details(name,age,course,branch,contact,email,enrollment) values('$name','$age','$course','$branch','$contact','$email','$enroll')";
			$res = mysqli_query($con,$sql);
		}
		else
		{	echo "Data aleredy exist";}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET DETAILS</title>
</head>
<body>
	<a href="problemstatement1_read_update_delete.php">Read data</a>
	<h1><i>Details</i></h1><br>
<form action="problemstatement1.php" method=post>
	Enter Enrolment number:<br>
	<input type="text" name="enroll"><br>
	Name:<br>
	<input type="text" name="name"><br>
	Age:<br>
	<input type="text" name="age"><br>
	Course:<br>
	<input type="text" name="course"><br>
	Branch:<br>
	<input type="text" name="branch"><br>
	Contact:<br>
	<input type="text" name="contact"><br>
	Email:<br>
	<input type="text" name="email"><br>
	<input type="submit" name="submit">
</form>
</body>
</html>