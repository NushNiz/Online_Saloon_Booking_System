<?php 
require("config.php");
if( isset( $_GET['id'])) {
$id = $_GET["id"];
$sql="DELETE FROM `employee` WHERE `emp_id`=".$id;
mysqli_query($conn,$sql);
header("Location: index.php?deletion=pass");
}
else{
header("Location: index.php?deletion=fail");
}
 ?>
