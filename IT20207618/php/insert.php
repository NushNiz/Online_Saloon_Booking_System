<?php 
require("config.php");

if( isset( $_POST['submit'])) {
$name = $_POST["name"];
$tp = $_POST["tp"];
$ht = $_POST["ht"];
$salary = $_POST["salary"];

$sql="INSERT INTO `employee`(`emp_name`, `emp_tp`, `emp_home_town`, `emp_salary`) VALUES ('".$name."','".$tp."','".$ht."','".$salary."')";
mysqli_query($conn,$sql);

header("Location: index.php?insetion=pass");
}
else{
header("Location: index.php?insetion=fail");
}
 ?>