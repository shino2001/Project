<?php 
	require('db.php');
	
	$id=$_GET['emp_id'];
	$query = "DELETE FROM employee WHERE emp_id=$id"; 
	$result = mysqli_query($conn,$query) or die ( mysqli_error());
	header("Location: home_employee.php"); 
 ?>