<?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="payment";
        //create the connection
 		
        $con= new mysqli($servername,$username,  $password,$db);
        //check the connection

        if($con->connect_error)
        {
            die("Failed to connect" .$con->connect_error);
        }
        else "Successfully connected";

    
    if( isset( $_POST['read'])) {
        
        
        $read = $_POST["read"];
$sql = "SELECT * FROM `payment`";
$result = mysqli_query($con, $sql);
     if (mysqli_num_rows($result) > 0) {
echo "
<table border=1>
<tr><th>Bank_Order_No</th>
<th>Payment_Amount</th>
<th>Card_Type</th>
<th>First_Name</th>
<th>Last_Name</th>
<th>Expiry_Date</th>
<th>CVC</th>
</tr>
";
while($row = mysqli_fetch_assoc($result)) {
echo"<br><br>";echo "<tr>
		<td>".$row["Bank_Order_No"]."</td>
		<td>".$row["Payment_Amount"]."</td>
		<td>".$row["Card_Type"]."</td>
		<td>".$row["First_Name"]."</td>
		<td>".$row["Last_Name"]."</td>
		<td>".$row["Expiry_Date"]."</td>
        <td>".$row["CVC"]."</td>
";
}
        
        
        
        
        
    }
    }

    

?>
  