
<html>
<head>
<style>

</style>
</head>
<body>
<center>


<table border = "1"></center>


<?php

require 'config.php';


function readContactInfo(){
	
	global $con;
    $info = "SELECT FirstName,LastName,Mobile_Number,Email,Message FROM contactus";
    $read = $con->query($info);
    if ($read->num_rows > 0) 
    {
		echo "<tr><th>First Name</th><th>Last Name</th><th>Mobile Number</th><th>Email</th><th>Message</th><th>Action</th></tr>";
        while($sql = $read->fetch_assoc()) 
			
        {			
					echo "<tr><form action='Update.php' method='POST'>";
					echo"<td><input type='text' name='fname' value=".$sql["FirstName"]."></td>";
					echo"<td><input type='text' name='lname' value=".$sql["LastName"]."></td>";
					echo"<td><input type='text' name='mobileno' value=".$sql["Mobile_Number"]."></td>";
					echo"<td><input type='text' name='email' value=".$sql["Email"]."></td>";
					echo"<td><input type='text' name='message' value=".$sql["Message"]."></td>";
					echo"<td><input type='submit' name='update' value='Update' id='up'></td></form>";
					echo "</tr>";

				

					echo"<tr><form action='Delete.php' method='POST'>";
					echo"<td><input type='text' name='fname' value=".$sql["FirstName"]."></td>";
					echo"<td><input type='text' name='lname' value=".$sql["LastName"]."></td>";
					echo"<td><input type='text' name='mobileno' value=".$sql["Mobile_Number"]."></td>";
					echo"<td><input type='text' name='email' value=".$sql["Email"]."></td>";
					echo"<td><input type='text' name='message' value=".$sql["Message"]."></td>";
					echo"<td><input type='submit' name='delete' value='Delete' id='del'></td></form>";
					echo "</tr>";

									 
        }

	}
    else 
    {
        echo "No results";
    }
  

}
readContactInfo();

$con -> close();

?>

</table>

</body>
</html>