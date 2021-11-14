<?php

	
	require 'config.php';
	
	if(isset($_POST['delete'])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobileno'];
$email = $_POST['email'];
$message = $_POST['message'];
	
	
	
	
	$delete = "DELETE FROM contactus WHERE Email = '$email'";
	
if($con ->query($delete)){
	echo "Record Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}
		
?>