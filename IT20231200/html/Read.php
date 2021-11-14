<!DOCTYPE html>
	<html>
	<head>
		<title>Salon Riverdale</title>

		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" href="../css/sunny.css">
		<link rel="stylesheet" href="../css/footercss.css">
		
	
		
	</head>
	<body class="bg">
			<div class="box-area">
				<header><!----------------- HEADER ----------------------->
					<div class="wrapper">
						<div class="logo">
							<a href="homepage.html"><img class="image2" src="..\images\salon1.jpg"></a>
							<a href="homepage.html" >Riverdale</a>
						</div>
							<nav>
								<a href="../../IT20207618/html/homepage.html">Home</a>
								<a href="../../IT20207618/html/services.html">Services</a>
								<a href="Feedback%20Page.html">Review</a>
								<a href="../../IT20252472/html/Location.html">Location</a>
								<a href="../../IT20240288/contactus.html">Contact Us</a>
								<a href="../../IT20203726/html/about.html">About</a>
                                <a href="../../IT20207618/html/admin-user-login.html">Login</a>
                                <div class="site-search">
							<form action="index.html" method="get">
		
						<input type="search" name="search-box">
						<button type="submit"></button>
							</form>	                               
							</nav>					
						</div>
				</header><!-------------- END OF HEADER ----------------------->
					<div class="uarea"><center><h2>Salon Riverdale</h2></center></div>
					<div class="con">
						<div class="wrapper">
							<h2 id="center"></h2><br>
					</div>
					
				<div class="box">
	<div>
		<h1><b><u><center>Purchase History</center></u></b></h1>
		<br><br><br><br>
		<br>
		<center>
	
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
<table style='color:black; background-color:white;' border=1>
<tr><th class='sunny'><br>Bank_Order_No</b></th>
<th class='sunny'><b>Payment_Amount</b></th>
<th class='sunny'><b>Card_Type</b></th>
<th class='sunny'><b>First_Name</b></th>
<th class='sunny'><b>Last_Name</b></th>
<th class='sunny'><b>Expiry_Date</b></th>
<th class='sunny'><b>CVC</b></th>
<th class='sunny'><b>Action</b></th>

</tr>
";
while($row = mysqli_fetch_assoc($result)) {
echo"<br><br>";echo "<tr><form action='delete.php' method='post'>";

		echo"<td> <input type='text' name='Binfo'value=".$row["Bank_Order_No"]."></td>";
		echo"<td><input type='text' name='Pinfo'value=".$row["Payment_Amount"]."></td>";
		echo"<td><input type='text' name='card'value=".$row["Card_Type"]."></td>";
		echo"<td><input type='text' name='fname'value=".$row["First_Name"]."></td>";
		echo"<td><input type='text' name='lname'value=".$row["Last_Name"]."></td>";
		echo"<td><input type='text' name='number'value=".$row["Card_Number"]."></td>";
		echo"<td><input type='text' name='date'value=".$row["Expiry_Date"]."></td>";
        echo"<td><input type='text' name='cvc'value=".$row["CVC"]."></td>";
		
		echo"<td><input type='submit' name='dele' value='delete' id='delete'></td></form>";
		echo"</tr>";

}
        
        
        
        
        
    }
    }

    

?>
  
  </center>
	</div>
	</div>
					

	<!------------------------------ FOOTER ------------------------------>
                        
                        
        

                    


		</div>
                

		</div><br><br>
		
		
	</body>
	</html>