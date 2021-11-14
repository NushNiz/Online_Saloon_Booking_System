
<html>
<head>
<style>

</style>
</head>
<body>
<center>



<?php

require 'config.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$notes = $_POST['notes'];
$date = $_POST['date'];
$time = $_POST['time'];



$sql = "INSERT INTO appointment_details(Name,Mobile_Number,Email,Appointment_Notes,Date,Time)VALUES('$name','$phone','$email','$notes','$date','$time')";



if($con ->query($sql)){
	echo "Inserted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}

$con -> close();

?>
<form method= "POST" action="read.php">
<input type="submit" value="Read" style="width:100px; height:30px; font-size:18px;">
</form>
</center>
</body>
</html>

