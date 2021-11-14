<?php

require 'config.php';



if(isset($_POST['update'])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobileno'];
$email = $_POST['email'];
$message = $_POST['message'];


$update  = "UPDATE contactus SET FirstName='$fname',LastName='$lname',Mobile_Number='$mobile',Email='$email',Message='$message' WHERE Email = '$email '";

if($con ->query($update)){
	echo "Data Updated Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}

$con -> close();

?>