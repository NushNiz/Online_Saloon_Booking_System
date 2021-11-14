<html>
<head>
</head>
<body>
<center>



<?php

require 'config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobileno'];
$email = $_POST['email'];
$message = $_POST['message'];




$insert = "INSERT INTO contactus(FirstName,LastName,Mobile_Number,Email,Message)VALUES('$fname','$lname','$mobile','$email','$message')";



if($con ->query($insert)){
	echo " Data Inserted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}

$con -> close();

?>
<form method= "POST" action="Read.php">
<input type="submit" value="Read" style="width:200px; height:50px; font-size:20px; border-radius:10px;">
</form>
</center>
</body>
</html>