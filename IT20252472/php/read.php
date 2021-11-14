
<html>
<head>
<link rel="stylesheet" href="../css/read.css">
</head>
<body>
<center>
<h1>Appointments</h2>

<table border = "1" style="font-family:verdana;" class="appta"></center>


<?php

require 'config.php';


function readData(){
	
	global $con;
    $read = "SELECT Name,Mobile_Number,Email,Appointment_Notes,Date,Time FROM appointment_details";
    $result = $con->query($read);
    if ($result->num_rows > 0) 
    {
		echo "<tr><th>Name</th><th>Mobile Number</th><th>E-mail</th><th>Appointment Notes</th><th>Date</th><th>Time</th></tr>";
        while($row = $result->fetch_assoc()) 
			
        {			
					echo "<tr ><form action='update.php' method='POST'>";
					
					
					echo"<td class='row2'><input type='text' name='name' value=".$row["Name"]."></td>";
					echo"<td class='row2'><input type='text' name='phone' value=".$row["Mobile_Number"]."></td>";
					echo"<td class='row2'><input type='text' name='email' value=".$row["Email"]."></td>";
					echo"<td class='row2'><input type='text' name='notes' value=".$row["Appointment_Notes"]."></td>";
					echo"<td class='row2'><input type='text' name='date' value=".$row["Date"]."></td>";
					echo"<td class='row2'><input type='text' name='time' value=".$row["Time"]."></td>";
					echo"<td><input type='submit' name='upd' class='update' value='Update' id='updt'></td></form>";
					echo "</tr>";

				

					echo"<tr  ><form action='delt.php' method='POST'>";
					
					echo"<td class='row1'><input type='text' name='name' value=".$row["Name"]."></td>";
					echo"<td class='row1'><input type='text' name='phone' value=".$row["Mobile_Number"]."></td>";
					echo"<td class='row1'><input type='text' name='email' value=".$row["Email"]."></td>";
					echo"<td class='row1'><input type='text' name='notes' value=".$row["Appointment_Notes"]."></td>";
					echo"<td class='row1'><input type='text' name='date' value=".$row["Date"]."></td>";
					echo"<td class='row1'><input type='text' name='time' value=".$row["Time"]."></td>";
					echo"<td><input type='submit' class='delt' name='del' value='Delete' id='delt'></td></form>";
					echo "</tr>";

									 
        }

	}
    else 
    {
        echo "No results";
    }
  

}
readData();

$con -> close();

?>

</table>
<br><br><br><a href="../../IT20231200/html/Payment%20Paget.php"><button class="bnbn">PAY NOW</button></a>
</body>
</html>

