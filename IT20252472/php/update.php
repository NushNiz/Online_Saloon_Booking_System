
<html>
<head></head>
<body>

<?php

require 'config.php';



if(isset($_POST['upd'])){

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$notes = $_POST['notes'];
$date = $_POST['date'];
$time = $_POST['time'];



$sql  = "UPDATE appointment_details SET Name='$name',Mobile_Number='$phone ',Email='$email',Appointment_Notes='$notes ',Date='$date',Time='$time ' WHERE Email = '$email '";

if($con ->query($sql)){
	echo "Updated Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}

$con -> close();

?>

</body>
</html>