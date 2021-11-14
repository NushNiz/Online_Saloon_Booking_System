<?php
include'connect.php';
$sql = "DELETE FROM manu WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    /*echo "Record deleted successfully";*/
	 header("Location: update.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>