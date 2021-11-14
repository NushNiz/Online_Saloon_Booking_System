<?php 
require("config.php");
if( isset( $_POST['update'])) {
$id = $_POST["id"];
$name = $_POST["name"];
$tp = $_POST["tp"];
$ht = $_POST["ht"];
$salary = $_POST["salary"];

$sql="UPDATE `employee` SET `emp_name`='".$name."',`emp_tp`=".$tp.",`emp_home_town`='".$ht."',`emp_salary`=".$salary."  WHERE `emp_id`=".$id."";
mysqli_query($conn,$sql);
header("Location: index.php?updation=pass");
}
else{
	echo "c";
header("Location: index.php?updation=fail");
}
 ?>