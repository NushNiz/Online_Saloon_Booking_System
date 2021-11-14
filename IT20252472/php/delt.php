<?php

	
	require 'config.php';
	
	if(isset($_POST['del'])){

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$notes = $_POST['notes'];
$date = $_POST['date'];
$time = $_POST['time'];
	
	
	
	
	$sql = "DELETE FROM appointment_details WHERE Email = '$email'";
	
if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}
	
		

?>













